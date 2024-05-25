@extends('layouts.app')

@section('content')
    <h1>Dettagli Filiale</h1>
    <p>Indirizzo: {{ $filiale->indirizzo }}</p>
    <p>Città: {{ $filiale->città }}</p>
    <p>CAP: {{ $filiale->cap }}</p>
    <a href="{{ route('filiali.index') }}">Torna alla lista delle Filiali</a>
@endsection