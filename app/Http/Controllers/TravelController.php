<?php

namespace App\Http\Controllers;

use App\Models\Travel;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    //
    public function index()
    {
        //IMPORTO I DATI DEL db
        $travels = Travel::all();
        return view('travels.index', compact('travels'));
    }
}
