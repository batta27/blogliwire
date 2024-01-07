<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Sottotitolo</th>
      <th scope="col">body</th>
      <th scope="col">Mostra articolo</th>
      <th scope="col">Modifica articolo</th>
      <th scope="col">Elimina articolo</th>


    </tr>
  </thead>
  <tbody>

    @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td>{{$article->subtitle}}</td>
      <td >{{Str::limit($article->body,10)}}</td>
      <td><a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Dettaglio</a></td>
      <td><a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica</a></td>
      <td><a wire:click="articleDelete({{$article}})" class="btn btn-danger">Elimina</a></td>
    </tr>
    @endforeach
     </tbody>
</table>
</div>
