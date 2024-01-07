<x-layout>
    <x-masthead
    title='Dettaglio articolo: {{$article->title}}'
    ></x-masthead>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
            <livewire:article-card articleId="{{$article->id}}"> </livewire:article-card>

            </div>
        </div>
    </div>








</x-layout>