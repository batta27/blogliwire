<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');   
    }

    public function create(){

        return view('article.create');
    }

    
    public function index(){

        // $articles = Article::all();

        return view('article.index');
    }

    public function show(Article $article){

        return view('article.show', compact('article'));
    }

    public function edit(Article $article){

        return view('article.edit', compact('article'));
    }
    
}