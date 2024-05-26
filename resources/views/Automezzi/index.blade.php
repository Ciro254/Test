@extends('welcome')

@section('content')
    <h1>Lista degli Automezzi</h1>
    <a href="{{ route('automezzi.create') }}">Aggiungi nuovo Automezzo</a>
    <ul class="list-group">
        @foreach ($automezzi as $automezzo)
            <li class="list-group-item">
                <a href="{{route('automezzi.show', $automezzo->id) }}">{{$automezzo->id}} - {{$automezzo->targa}} - {{$automezzo->marca}}</a>
                <form action="{{route('automezzi.destroy', $automezzo->id)}}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection