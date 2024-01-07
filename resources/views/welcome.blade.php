<x-layout>


    <x-masthead title='Homepage'></x-masthead>


     <!-- <div class="container my-5"> 
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 id='number'>1</h2>
                <button id='add' class="btn btn-success">+</button>
            </div>
        </div>
    </div>

    <script>
        let number = document.querySelector('#number');
        let add = document.querySelector('#add');

        add.addEventListener('click',function (){
            number.innerHTML++;
        });

    </script> -->

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <livewire:counter></livewire:counter>

            </div>
        </div>
    </div>



</x-layout>