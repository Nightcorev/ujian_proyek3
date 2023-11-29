
@extends('layout.app')  
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   
    <table class="table table-bordered">
        <tr>
            <th>Kode Tenan</th>
            <th>Nama Tenan</th>
            <th>Nomor Hp</th>
        </tr>
        @foreach ($tenan as $tenan)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $tenan->KodeTenan }}</td>
            <td>{{ $tenan->NamaTenan }}</td>
			<td>{{ $tenan->HP }}</td>
        </tr>
        @endforeach
    </table>      
@endsection