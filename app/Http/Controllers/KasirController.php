<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Kasir;

class KasirController extends Controller
{
    public function index()    {
        $kasir = Kasir::orderBy('KodeKasir', 'desc')->paginate(5);
        return view('ViewKasir',compact('kasir'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    } 
}
