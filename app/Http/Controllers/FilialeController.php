<?php

namespace App\Http\Controllers;
use App\Models\Filiale;
use Illuminate\Http\Request;

class FilialeController extends Controller
{
    public function index()
    {
        $filiali = Filiale::all();
        return view('filiali.index', compact('filiali'));
    }

    public function show(Filiale $filiale)
    {
        return view('filiali.show', compact('filiale'));
    }

    public function create()
    {
        return view('filiali.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'indirizzo' => 'required',
            'città' => 'required',
            'cap' => 'required',
        ]);

        Filiale::create($request->all());

        return redirect()->route('filiali.index')->with('success', 'Filiale creata con successo.');
    }

    public function destroy($id)
    {
        $filiale = Filiale::findOrFail($id);
        $filiale->delete();

        return redirect()->route('filiali.index')->with('success', 'Filiale eliminata con successo.');
    }

    public function apiFiliale()
{
    $filiali = Filiale::with('automezzi')->get();
    return response()->json($filiali);
}
}
