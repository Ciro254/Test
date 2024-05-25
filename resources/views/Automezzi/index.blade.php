@extends('welcome')

@section('content')
    <h1>Lista degli Automezzi</h1>
    <a href="{{route('automezzi.create')}}">Aggiungi nuovo Automezzo</a>
    <ul>
        @foreach ($automezzi as $automezzo)
            <li>
                <a href="{{route('automezzi.show', $automezzo->id) }}">{{$automezzo->targa}} - {{$automezzo->marca}}</a>
                <form action="{{route('automezzi.destroy', $automezzo->id)}}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection