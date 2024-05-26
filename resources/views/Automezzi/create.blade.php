@extends('welcome')

@section('content')
    <h1>Aggiungi Nuovo Automezzo</h1>

    <form action="{{ route('automezzi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="targa" class="form-label">Targa:</label>
            <input type="text" id="targa" class="form-control" name="targa" required>
          </div>
          <div class="mb-3">
            <label for="marca:" class="form-label">Marca:</label>
            <input type="text" id="marca" class="form-control" name="marca" required>
          </div>
          <div class="mb-3">
            <label for="modello" class="form-label">Modello:</label>
            <input type="text" id="modello" class="form-control" name="modello" required>
          </div>
        <label for="filiale_id">Filiale:</label>
        <select name="filiale_id" required>
            @foreach ($filiali as $filiale)
                <option value="{{ $filiale->id }}">{{ $filiale->indirizzo }} - {{ $filiale->città }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection

