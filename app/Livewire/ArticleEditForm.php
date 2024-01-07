<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleEditForm extends Component
{



    public $article;

    public $title;

    public $subtitle;

    public $body;

        // override del metodo
    public function mount(){

        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this -> body = $this->article->body;

    }

    public function articleUpdate(){

        // update dell'articolo
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        // session()->flash('message','Articolo modificato correttamente');
        return redirect(route('article.index'))->with ('message','Articolo modificato correttamente') ;
    }






    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
