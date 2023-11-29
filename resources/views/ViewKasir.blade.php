
@extends('layout.app')  
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   
    <table class="table table-bordered">
        <tr>
            <th>Kode Kasir</th>
            <th>Nama Kasir</th>
            <th>Nomor Hp</th>
        </tr>
        @foreach ($kasir as $kasir)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $kasir->KodeKasir }}</td>
            <td>{{ $kasir->NamaKasir }}</td>
			<td>{{ $kasir->HP }}</td>
        </tr>
        @endforeach
    </table>      
@endsection