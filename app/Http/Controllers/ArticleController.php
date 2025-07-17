<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $articles=Article::paginate(6);
        return view('components.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view('components.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $ext=$request->file('image')->extension();
            $fileName=uniqid() . "." . $ext;
        }
        try {
       $path=$request->file('image')->storeAs('images',$fileName,'public');
       $url= Storage::url($path);
       $newArticle=new Article();
       $newArticle->title=$request->title;
       $newArticle->content=$request->content;
       $newArticle->author=$request->author;
       $newArticle->image=$url;
       $newArticle->save();
        } catch (\Throwable $th) {
            //throw $th;
        }
    //    $newArticle=new Article();
    //    $newArticle->title=$request->title;
    //    $newArticle->content=$request->content;
    //    $newArticle->author=$request->author;
    //    $newArticle->image=$request->image;
    //    $newArticle->save();
        // Article::create($request->all());

       return redirect()->back()->with('success','Articolo pubblicato con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
           $article=Article::findorFail($article->id);
        return view('components.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {

        return view('components.articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
       if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $ext=$request->file('image')->extension();
            $fileName=uniqid() . "." . $ext;
            $path=$request->file('image')->storeAs('images',$fileName,'public');
            $url= Storage::url($path);
            // $article->image=$url;
        }
        // dd($request->all());
        $article->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'author'=>$request->author,
            'image'=>$url

        ]);
       return redirect()->route('dashboard')->with('success','Articolo modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()->with('success','Articolo eliminato con successo');
    }
    public function dashboard(){

        return view('users.dashboard',['articles'=>Article::all()]);
    }
}
