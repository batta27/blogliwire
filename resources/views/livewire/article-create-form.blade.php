<div>
    
    <h2>Inserisci form qui</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<!-- Create Post Form -->
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif


    <form class="p-4 shadow border-4 rounded-3" wire:submit.prevent="articleStore">
        
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" wire:model.live.debounce.1000ms="title" class="form-control" id="title">
        </div>
        <div class="mb-3">
          <label for="subtitle" class="form-label">Sottotitolo</label>
          <input type="text" wire:model.blur="subtitle" class="form-control" id="subtitle">
        </div>
        <div class="mb-3">
          @foreach($categories as $category)
          <div class="form-check">
              <input class="form-check-input" wire:model="categoryChecks" type="checkbox" value="{{$category->id}}" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                {{$category->name}}
            </label>
          </div>
          @endforeach
          
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Corpo del testo</label>
          <textarea type="text" wire:model.blur="body" class="form-control" rows="10" id="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
      </form>

</div>
