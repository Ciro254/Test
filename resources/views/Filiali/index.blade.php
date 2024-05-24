<h1>Lista delle Filiali</h1>
<ul>
    @foreach ($filiali as $filiale)
        <li>
            <a href="{{ route('filiali.show', $filiale->codice) }}">{{ $filiale->indirizzo }} - {{ $filiale->città }}</a>
            
        </li>
    @endforeach
</ul>