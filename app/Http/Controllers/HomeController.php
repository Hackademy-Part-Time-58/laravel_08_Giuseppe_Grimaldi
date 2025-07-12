<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $articles=Article::take(3)->get();
          return view('homepage',compact('articles'));
    }
        public function contacts(){
            return view('contacts');
        }
        public function chiSiamo(){
            return view('chi_siamo');
        }
    }
