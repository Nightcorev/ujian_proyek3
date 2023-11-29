<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> --}}
<title>CrudProyek</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" 
rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
rel="stylesheet"/>
<link rel="icon" href="{{ asset('img/aboutUS.png') }}" type="image/png">

<body>
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #73b2fc">
    <a href="{{route('barang.index')}}" class="navbar-brand">Pengelolaan Barang</a>
    <a href="{{route('tenan.index')}}" class="navbar-brand">Tenan</a>
    <a href="{{route('kasir.index')}}" class="navbar-brand">Kasir</a>
    <a href="" class="navbar-brand">Transaksi</a>
    <a href="{{route('nota.index')}}" class="navbar-brand">Lihat Nota</a>
</nav> 
<div class="container">
	<br>
	<h2>CRUD Operations in Laravel</h2>
    @yield('content')
</div>   
</body>
</html>