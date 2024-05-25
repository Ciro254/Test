@extends('welcome')

@section('content')
    <h1>Dettagli Automezzo</h1>
    <p>Targa: {{ $automezzo->targa }}</p>
    <p>Marca: {{ $automezzo->marca }}</p>
    <p>Modello: {{ $automezzo->modello }}</p>
    <p>Filiale: {{ $automezzo->filiale->indirizzo }}</p>
    <a href="{{route('automezzi.index')}}">Torna alla lista degli Automezzi</a>
@endsection