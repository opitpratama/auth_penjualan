@extends('layouts.app') 

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-position: center;
                background-repeat: no-repeat;
                background-image:url({{url('images/bg.jpg')}}); color: #fff;">Kategori Management</div>


                <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary">Tambah Kategori</a>
<p></p>
<div class="panel-body"> 
<table class="table table-striped"> 
 	<thead> 
 	 	<tr> 
 	 	 	<th>No</th> 
 	 	 	<th>Nama</th> 
 	 	 	</thead> 
 	 	      	 	<tbody> 
 	 	      	 	 	@foreach ($kategori as $i => $p) 
 	 	      	 	 	 	<tr> 
 	 	      	 	 	 	 	<td>{{ $i+1 }}</td> 
 	 	      	 	 	 	 	<td>{{ $p->nama_kategori }}</td> 
 	 	      	 	 	 	 	<td> 
 	 	      	 	 	 	 	 	<form method="post" action="{{ route('kategori.destroy',$p->id) }}"> 
 	 	      	 	 	 	 	 	 	{{ csrf_field() }}  	 	      	 	 	 	 	 	 	
 	 	      	 	 	 	 	 	 	<input type="hidden" name="_method" value="DELETE"> 
 	 	      	 	 	 	 	 	 	<button class="btn btn-danger" type="submit">Hapus GANSS!</button> 
 	 	      	 	 	 	 	 	</form> 
 	 	      	 	 	 	 	</td> 
 	 	      	 	 	 @endforeach
@endsection