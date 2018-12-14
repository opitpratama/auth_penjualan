@extends('layouts.app') 
@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-position: center;
                background-repeat: no-repeat;
                background-image:url({{url('images/bg.jpg')}}); color: #fff;">Produk Management</div>
          <div class="panel-head container-fluid" style="margin-top: 10px;"> 
            <p>Edit Produk</p> 
            <hr>
          </div> 
          <div class="panel-body"> 
            <form   class="form-horizontal"   action="{{ route('produk.update',$produk->id) }}" method="post"> 
              {{ csrf_field() }} 
              <input type="hidden" name="_method" value="PUT"> 
              <div class="form-group"> 
                <label  class="control-label  col-sm-2">Nama 
Produk</label> 
                <div class="col-sm-12"> 
                  <input type="text" class="form-control" name="nama" value="{{ $produk->nama_produk }}"> 
                </div> 
              </div> 
              <div class="form-group"> 
                <label class="control-label col-sm-2">Kategori 
Produk</label> 
                <div class="col-sm-12"> 
                  <select   class="form-control" name="kategori"> 
                    <option   value="">Pilih 
Kategori</option> 
                    @foreach ($kategori as $k) 
                      <option value="{{ $k->id }}"
@if ($produk->id_kategori==$k->id) selected @endif>{{ $k->nama_kategori }}</option> 
                    @endforeach 
                  </select> 
                </div> 
              </div> 
              <div class="form-group"> 
                <label  class="control-label  col-sm-2">Qty 
Awal</label> 
                <div class="col-sm-12"> 
                  <input type="text" class="form-control" name="qty" value="{{ $produk->qty }}"> 
                </div> 
              </div> 
              <div class="form-group"> 
                <label  class="control-label  col-sm-2">Harga 
Jual</label> 
                <div class="col-sm-12"> 
                  <input type="text" class="form-control" name="jual" value="{{ $produk->harga_jual }}"> 
                </div> 
              </div> 
              <div class="form-group"> 
                <label  class="control-label  col-sm-2">Harga 
Beli</label> 
                <div class="col-sm-12"> 
                  <input type="text" class="form-control" name="beli" value="{{ $produk->harga_beli }}"> 
                </div> 
              </div> 
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                  <button type="submit" class="btn btn-outline-success">Perbaharui Data</button> 
                </div> 
              </div> 
            </form> 
          </div> 
        
@endsection 
