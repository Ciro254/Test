@extends('welcome')

@section('content')
    <h1>Aggiungi Nuova Filiale</h1>

    <form action="{{route('filiali.store')}}" method="POST">
        @csrf
        <label for="indirizzo">Indirizzo:</label>
        <input type="text" name="indirizzo" required>
        <br>
        <label for="città">Città:</label>
        <input type="text" name="città" required>
        <br>
        <label for="cap">CAP:</label>
        <input type="text" name="cap" required>
        <br>
        <button type="submit">Salva</button>
    </form>
@endsection
