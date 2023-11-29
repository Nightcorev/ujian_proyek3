@extends('layout.app')  
   
@section('content')
	<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Edit Product</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barang.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('barang.update',$barang->KodeBarang) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Barang:</strong>
                    <input type="text" name="kode_barang" value="{{ $barang->KodeBarang }}" class="form-control" placeholder="BRG[NIM]Number">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang:</strong>
                    <input type="text" name="nama_barang" value="{{ $barang->NamaBarang }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Satuan:</strong>
                    <input type="text" name="satuan_barang" value="{{ $barang->Satuan }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Satuan:</strong>
                    <input type="text" name="harga_barang" value="{{ $barang->HargaSatuan }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stok:</strong>
                    <input type="text" name="stok_barang" value="{{ $barang->Stok }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
   
    </form>
@endsection