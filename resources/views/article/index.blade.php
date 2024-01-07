<x-layout>

    <x-masthead title='Tutti gli articolo'></x-masthead>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
            <livewire:article-table-index ></livewire:article-table-index>

            </div>
        </div>
    </div>






</x-layout>