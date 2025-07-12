<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    public function index(){
        $articles=Article::all();
        return view('components.articles.index',compact('articles'));
    }
    public function show(string $articleId){
        $article=Article::findorFail($articleId);
        return view('components.articles.show',compact('article'));
    }
    public function create(){
        return view('components.articles.create');
    }
    public function store(ArticleRequest $request){
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
}
