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
}
