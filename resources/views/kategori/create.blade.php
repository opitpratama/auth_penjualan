@extends('layouts.app') 
@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header" style="background-color: #00932c; color: #fff">Create Kategori</div>
      	 	<div class="panel-head container-fluid" style="margin-top: 10px;"> 
      	 	 	<p>Tambah Kategori Produk</p> 
      	 	 	<hr>
      	 	</div> 
 	      	<div class="panel-body">
<form class="form-horizontal" action="{{ route('kategori.store') }}" method="post"> 
 	 	      	 	{{ csrf_field() }} 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label 	class="control-label col-sm-2">Nama Kategori</label> 
 	 	      	 	 	<div class="col-sm-12"> 
 	 	      	 	 	 	<input type="text" class="form-control" name="nama"> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<div class="col-sm-offset-2 col-sm-10"> 
 	 	      	 	 	 	<button type="submit" class="btn btn-outline-primary">Simpan</button>
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 </form>
@endsection