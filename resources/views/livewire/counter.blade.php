<!-- il componente livewire deve avere sempre un div come tag piu esterno -->
<div>
    <h3>sono un componente</h3>

        <h2>{{$value}}</h2>
        <button id='add' class="btn btn-success" wire:click="increment">+</button>
        <button id='add' class="btn btn-success" wire:click="incrementByNumber(5)">+5</button>





</div>
