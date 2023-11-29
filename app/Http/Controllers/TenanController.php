<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Tenan;
class TenanController extends Controller
{
    public function index()    {
        $tenan = Tenan::orderBy('KodeTenan', 'desc')->paginate(5);
        return view('ViewTenan',compact('tenan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    } 
}
