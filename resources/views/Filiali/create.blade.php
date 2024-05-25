@extends('welcome')

@section('content')
    <h1>Aggiungi Nuova Filiale</h1>

    <form action="{{route('filiali.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="indirizzo" class="form-label">Indirizzo:</label>
          <input type="text" class="form-control" name="indirizzo" required>
        </div>
        <div class="mb-3">
          <label for="città" class="form-label">Città:</label>
          <input type="text" class="form-control" name="città" required>
        </div>
        <div class="mb-3">
            <label for="cap" class="form-label">CAP:</label>
            <input type="text" class="form-control" name="cap" required>
          </div>
        <button type="submit" class="btn btn-primary">Salva</button>
      </form>
@endsection


