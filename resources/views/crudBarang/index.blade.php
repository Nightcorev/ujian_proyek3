@extends('layout.app')  
@section('content')
	<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barang.create') }}"> Add Product</a>
            </div>
        </div>
    </div>
	<br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   
    <table class="table table-bordered">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
			<th>Harga Satuan</th>
            <th>Stok</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barang as $barang)
        <tr>
            <td>{{ $barang->KodeBarang }}</td>
            <td>{{ $barang->NamaBarang }}</td>
			<td>{{ $barang->Satuan }}</td>
            <td>{{ $barang->HargaSatuan }}</td>
            <td>{{ $barang->Stok }}</td>
            <td>
                <form action="{{ route('barang.destroy',$barang->KodeBarang) }}" method="POST">   
                    {{-- <a class="btn btn-info" href="{{ route('barang.show',$barang->KodeBarang) }}"><span class="fa fa-address-book"></a>     --}}
                    <a class="btn btn-primary" href="{{ route('barang.edit',$barang->KodeBarang) }}"><i class="fa fa-pencil"></i></a>  
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger"><span class="fa fa-remove"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>      
@endsection