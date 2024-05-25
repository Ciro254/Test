@extends('welcome')

@section('content')
    <h1>Aggiungi Nuovo Automezzo</h1>

    <form action="{{ route('automezzi.store') }}" method="POST">
        @csrf
        <label for="targa">Targa:</label>
        <input type="text" name="targa" required>
        <br>
        <label for="marca">Marca:</label>
        <input type="text" name="marca" required>
        <br>
        <label for="modello">Modello:</label>
        <input type="text" name="modello" required>
        <br>
        <label for="filiale_id">Filiale:</label>
        <select name="filiale_id" required>
            @foreach ($filiali as $filiale)
                <option value="{{ $filiale->id }}">{{ $filiale->indirizzo }} - {{ $filiale->città }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Salva</button>
    </form>
@endsection