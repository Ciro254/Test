@extends('welcome')

@section('content')
    <h1>Lista delle Filiali</h1>
    <a href="{{ route('filiali.create') }}">Aggiungi nuova Filiale</a>
    <ul class="list-group">
        @foreach ($filiali as $filiale)
            <li class="list-group-item">
                <a href="{{ route('filiali.show', $filiale->id) }}">{{ $filiale->indirizzo }} - {{ $filiale->città }}</a>
                <form action="{{ route('filiali.destroy', $filiale->id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" >Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection