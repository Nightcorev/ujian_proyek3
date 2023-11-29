<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
class NotaController extends Controller
{
    public function index()    {
        $nota = Nota::orderBy('KodeNota', 'desc')->paginate(5);
        return view('ViewNota',compact('nota'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    } 
}
