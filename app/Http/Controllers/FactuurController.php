<?php

namespace App\Http\Controllers;

use App\Factuur;
use Illuminate\Http\Request;

class FactuurController extends Controller
{
    public function index()
    {
        $facturen = Factuur::all();
        return view('factuur.index', compact('facturen'));
    }
}
