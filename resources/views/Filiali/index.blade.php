@extends('welcome')

@section('content')
    <h1>Lista delle Filiali</h1>
    <a href="{{ route('filiali.create') }}">Aggiungi nuova Filiale</a>
    <ul>
        @foreach ($filiali as $filiale)
            <li>
                <a href="{{ route('filiali.show', $filiale->id) }}">{{ $filiale->indirizzo }} - {{ $filiale->città }}</a>
               
                </form>
            </li>
        @endforeach
    </ul>
@endsection