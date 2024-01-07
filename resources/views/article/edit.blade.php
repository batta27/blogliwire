<x-layout>
    <x-masthead title='Modifica Articolo'></x-masthead>



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 ">

                <livewire:article-edit-form
                :article="$article"
                ></livewire:article-edit-form>
                
            </div>
        </div>
    </div>


</x-layout>