@extends('layouts.app') 
@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header" style="background-color: #0061ff; color: #fff">Create Produk</div>
      	 	<div class="panel-head container-fluid" style="margin-top: 10px;"> 
      	 	 	<p>Tambah Data produk</p> 
      	 	 	<hr>
      	 	</div> 
 	      	<div class="panel-body"> 
 	 	      	<form class="form-horizontal" action="{{ route('produk.store') }}" method="post"> 
 	 	      	 	{{ csrf_field() }} 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label 	class="control-label col-sm-2">Nama Produk</label> 
 	 	      	 	 	<div class="col-sm-12"> 
 	 	      	 	 	 	<input type="text" class="form-control" name="nama"> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label class="control-label col-sm-2">Kategori Produk</label> 
 	 	      	 	 	<div class="col-sm-12"> 
 	 	      	 	 	 	<select 	class="form-control" name="kategori"> 
 	 	      	 	 	 	 	<option 	value="">Pilih Kategori</option> 
 	 	      	 	 	 	 	@foreach ($kategori as $k) 
 	 	      	 	 	 	 	 	<option value="{{ $k->id }}">{{ $k->nama_kategori }}</option> 
 	 	      	 	 	 	 	@endforeach 
 	 	      	 	 	 	</select> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label 	class="control-label col-sm-2">Qty Awal</label> 
 	 	      	 	 	<div class="col-sm-12"> 
 	 	      	 	 	 	<input type="text" class="form-control" name="qty"> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label 	class="control-label col-sm-2">Harga Jual</label> 
 	 	      	 	 	<div class="col-sm-12"> 
 	 	      	 	 	 	<input type="text" class="form-control" name="jual"> 
 	 	      	 	 	</div>
					</div> 
 	 	      	 	<div class="form-group"> 
							<label 	class="control-label 	col-sm-2">Harga Beli</label> 
 	 	      	 	 	<div class="col-sm-12"> 
 	 	      	 	 	 	<input type="text" class="form-control" name="beli"> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<div class="col-sm-offset-2 col-sm-10"> 
 	 	      	 	 	 	<button type="submit" class="btn btn-outline-primary">Simpan</button>
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	</form> 
			</div> 
		</div>
      	</div> 
     </div> 
    </div> 
</div> 
@endsection 
