<?php

namespace App\Http\Controllers;
use App\Models\Filiale;
use Illuminate\Http\Request;

class FilialeController extends Controller
{
    public function index()
    {
        $filiali = Filiale::all();
        return view('Filiali.index', compact('filiali'));
    }

    public function show(Filiale $filiali)
    {
        return view('filiali.show', compact('filiale'));
    }
}
