<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleCreateForm extends Component
{

    public $title;
    public $subtitle;
    public $body;
    public $categoryChecks= [];


    //! Questa proprietà DEVE chiamarsi RULES
    protected $rules = [
        'title' => 'required|min:3',
        'subtitle' => 'required|max:30',
        'body' => 'required|min:10',
    ];

    protected $messages = [
        'title.required' => 'Il titolo è obbligatorio',
        'subtitle.required' => 'Il Sottotitolo obbligatorio',
        'body.required' => 'Corpo del testo necessario'
    ];

    public function articleStore(){

        // dd($this->subtitle, $this->body);

        $this->validate();
        // $user = Auth::user();
        
        $article = Auth::user()->articles()->create([
            'title' => $this->title,
            'subtitle' =>  $this->subtitle,
            'body' =>  $this->body,
        ]);
        $article->categories()->attach($this->categoryChecks);

        //? MASS ASSIGNMENT
        // Article::create([
        //     'title' => $this->title,
        //     'subtitle' =>  $this->subtitle,
        //     'body' =>  $this->body,
        // ]);

        session()->flash('message', 'l\'articolo è stato creato');
        // $this->clearForm();
        $this->reset(); //! metodo di livewire che ripulisce tutti i campi
    }

    // protected function clearForm(){
    //     $this->title = "";
    //     $this->subtitle = "";
    //     $this->body = "";
    // }


    // il metodo updated e il parametro $propertyName devono chiamarsi assolutamente così
    public function updated($propertyName) {

     $this->validateOnly($propertyName);

     }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.article-create-form',compact('categories'));
    }
}