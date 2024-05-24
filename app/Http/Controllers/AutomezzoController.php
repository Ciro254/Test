<?php

namespace App\Http\Controllers;

use App\Models\Filiale;
use App\Models\Automezzo;
use Illuminate\Http\Request;

class AutomezzoController extends Controller
{
    public function index()
    {
        $automezzi = Automezzo::all();
        return view('automezzi.index', compact('automezzi'));
    }

    public function show($id)
    {
        $automezzo = Automezzo::findOrFail($id);
        return view('automezzi.show', compact('automezzo'));
    }

    public function create()
    {
        $filiali = Filiale::all();
        return view('automezzi.create', compact('filiali'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'targa' => 'required|unique:automezzi',
            'marca' => 'required',
            'modello' => 'required',
            'filiale_id' => 'required|exists:filiali,codice',
        ]);

        Automezzo::create($request->all());

        return redirect()->route('automezzi.index')->with('success', 'Automezzo creato con successo.');
    }

    public function destroy($id)
    {
        $automezzo = Automezzo::findOrFail($id);
        $automezzo->delete();

        return redirect()->route('automezzi.index')->with('success', 'Automezzo eliminato con successo.');
    }
}
