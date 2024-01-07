<x-layout>

    <x-masthead
    title='Accedi'
    ></x-masthead>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email </label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
              </form>
        </div>
    </div>
</div>

</x-layout>