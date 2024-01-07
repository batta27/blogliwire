<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTableIndex extends Component
{
    // public $articles;

    public function articleDelete(Article $article){

        // $article = Article::find($articleid);
    //    dd($article);
        $article->delete();
        

    }



    public function render()
    {
        $articles = Article::all();
        return view('livewire.article-table-index' , compact('articles'));
    }
}
