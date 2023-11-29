
@extends('layout.app')  
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   
    <table class="table table-bordered">
        <tr>
            <th>Kode Nota</th>
            <th>Nama Tenan</th>
            <th>Nama Kasir</th>
            <th>Nomor Hp</th>
        </tr>
        @foreach ($nota as $nota)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $nota->KodeNota }}</td>
            <td>{{ $nota->tenan->NamaTenan }}</td>
            <td>{{ $nota->kasir->NamaKasir }}</td>
            <td>{{ $nota->TglNota }}</td>
            <td>{{ $nota->JumlahBelanja }}</td>
            <td>{{ $nota->Diskon }}</td>
			<td>{{ $nota->Total }}</td>
        </tr>
        @endforeach
    </table>      
@endsection