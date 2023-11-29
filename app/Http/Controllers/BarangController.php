<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Barang;
  
class BarangController extends Controller{
    
    public function index()    {
        $barang = Barang::orderBy('KodeBarang', 'desc')->paginate(5);
        return view('crudBarang.index',compact('barang'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }   
    
    public function create() {
        return view('crudBarang.create');
    }  
    
    public function store(Request $request) {
        $request->validate([
            'kode_barang' => 'required|unique:barang,KodeBarang',
            'nama_barang' => 'required',
            'satuan_barang' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
        ]);
        
        Barang::create([
            'KodeBarang' => $request->kode_barang,
            'NamaBarang' => $request->nama_barang,
            'Satuan' => $request->satuan_barang,
            'HargaSatuan' => $request->harga_barang,
            'Stok' => $request->stok_barang,
        ]);
        
        // dd($a->KodeBarang);
        return redirect()->route('barang.index')
                        ->with('success','Barang created successfully.');
    } 
   
    public function show(Barang $barang){
        return view('crudBarang.show',compact('barang'));
    }  
    
    public function edit(Barang $barang){
        return view('crudBarang.edit',compact('barang'));
    } 
    
    public function update(Request $request, Barang $barang){
        $request->validate([
            'kode_barang' => 'required|unique:barang,KodeBarang',
            'nama_barang' => 'required',
            'satuan_barang' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
        ]);
  
        $barang->update([
            'KodeBarang' => $request->kode_barang,
            'NamaBarang' => $request->nama_barang,
            'Satuan' => $request->satuan_barang,
            'HargaSatuan' => $request->harga_barang,
            'Stok' => $request->stok_barang,
        ]);
  
        return redirect()->route('barang.index')
                        ->with('success','Barang updated successfully');
    }  
    
    public function destroy(Barang $barang) {
        $barang->delete();
  
        return redirect()->route('barang.index')
                        ->with('success','Barang deleted successfully');
    }
}