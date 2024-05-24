<?php

namespace App\Http\Controllers;

use App\Models\Automezzo;
use Illuminate\Http\Request;

class AutomezzoController extends Controller
{
    public function index()
    {
        $filiali = Automezzo::all();
        return view('Automezzi.index', compact('automezzi'));
    }

    public function show(Automezzo $automezzi)
    {
        return view('automezzi.show', compact('automezzo'));
    }
}
