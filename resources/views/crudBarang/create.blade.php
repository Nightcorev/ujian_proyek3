@extends('layout.app')  
@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4>Add Barang</h4>
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
<form action="{{ route('barang.store') }}" method="POST">
    @csrf  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Barang:</strong>
                <input type="text" name="kode_barang" class="form-control" placeholder="BRG[NIM]Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang:</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Masukan Nama Barang">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Satuan:</strong>
                <input type="text" name="satuan_barang" class="form-control" placeholder="Masukan Satuan Barang (example: pcs)">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Satuan:</strong>
                <input type="text" name="harga_barang" class="form-control" placeholder="Masukan Harga Satuan Barang">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok:</strong>
                <input type="text" name="stok_barang" class="form-control" placeholder="Masukan Stok Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>   
</form>
@endsection