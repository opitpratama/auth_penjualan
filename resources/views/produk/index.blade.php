@extends('layouts.app') 

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-position: center;
                background-repeat: no-repeat;
                background-image:url({{url('images/bg.jpg')}}); color: #fff;">Produk Management</div>

                <div class="card-body">
      	 	<div class="panel-head container-fluid" style="margin-top: 10px;"> 	
<a href="{{ route('produk.create') }}" 	class="btn btn-outline-primary">Tambah Produk</a>
</div>

<!-- <div class="pull-right"> 
 	<p>Data produk</p> 
</div> -->
<p></p>

<div class="panel-body"> 
<table class="table table-striped"> 
 	<thead> 
 	 	<tr> 
 	 	 	<th>No</th> 
 	 	 	<th>Nama</th> 
 	 	 	<th>Kategori</th> 
 	 	 	<th>Qty</th> 
 	 	 	<th>Harga Beli</th> 		
 	 	      	 	 	 	<th>Harga Jual</th> 
 	 	      	 	 	 	<th>Dibuat Pada</th> 
							<th>Diedit Pada</th> 
 	 	      	 	 	 	<th colspan="3" style="text-align: center;">Aksi</th> 
 	 	      	 	 	</tr> 
 	 	      	 	</thead> 
 	 	      	 	<tbody> 
 	 	      	 	 	@foreach ($produk as $i => $p) 
 	 	      	 	 	 	<tr> 
 	 	      	 	 	 	 	<td>{{ $i+1 }}</td> 
 	 	      	 	 	 	 	<td>{{ $p->nama_produk }}</td> 
 	 	      	 	 	 	 	<td>{{ $p->Kategori->nama_kategori }}</td> 
 	 	      	 	 	 	 	<td>{{ $p->qty }}</td> 
 	 	      	 	 	 	 	<td>{{ $p->harga_beli }}</td> 
 	 	      	 	 	 	 	<td>{{ $p->harga_jual }}</td> 
 	 	      	 	 	 	 	<td>{{ $p->created_at }}</td> 
 	 	      	 	 	 	 	<td>{{ $p->updated_at }}</td> 
 	 	      	 	 	 	 	<td><a 	href="{{ route('produk.show',$p->id) }}" class="btn btn-warning"> Detail</a></td> 
 	 	      	 	 	 	 	<td><a class="btn btn-success" href="{{ route('produk.edit',$p->id) }}"> Edit</a></td> 
 	 	      	 	 	 	 	<td> 
 	 	      	 	 	 	 	 	<form method="post" action="{{ route('produk.destroy',$p->id) }}"> 
 	 	      	 	 	 	 	 	 	{{ csrf_field() }}  	 	      	 	 	 	 	 	 	
 	 	      	 	 	 	 	 	 	<input type="hidden" name="_method" value="DELETE"> 
 	 	      	 	 	 	 	 	 	<button class="btn btn-danger" type="submit">Hapus</button> 
 	 	      	 	 	 	 	 	</form> 
 	 	      	 	 	 	 	</td> 
 	 	      	 	 	 	</tr> 
 	 	      	 	 	@endforeach 
 	 	      	 	</tbody> 
 	 	      	</table> 	  
      	 	</div> 

@endsection