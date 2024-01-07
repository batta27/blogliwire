<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCard extends Component
{
    public $articleId;
    public $article;

    // mount è il "costruttore" del nostro componente Livewire
    public function mount(){

        $this->article = Article::find($this->articleId);

    }

    public function render()
    {
        return view('livewire.article-card');
    }
}
