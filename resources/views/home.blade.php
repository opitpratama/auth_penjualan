@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                        <!-- <button type="button" class="btn btn-outline-secondary">Tambah Kategori</button> --> 
<div>
    <h3>Detail Barang Ada</h3>
    <p>
</div>

                   <a href="{{url('/produk')}}" class="btn btn-outline-primary">ProdukSSS</a>
                   <a href="{{ url('/kategori') }}" class="btn btn-outline-success">Kategoriss</a>
<p></p>

<div class="panel-body col-md-12"> 
<table class="table table-striped"> 
    <thead> 
        <tr> 
            <th>No</th> 
            <th>Nama</th> 
            <th>Kategori</th> 
            <th>Qty</th> 
            <th>Harga Beli</th>  
            <th>Harga Jual</th>                      
            </tr> 
                    </thead> 
                    <tbody> 
                    @foreach ($produks as $i => $p) 
                            <tr> 
                                <td>{{ $i+1 }}</td> 
                                <td>{{ $p->nama_produk }}</td> 
                                <td>{{ $p->Kategori->nama_kategori }}</td> 
                                <td>{{ $p->qty }}</td> 
                                <td>{{ $p->harga_beli }}</td> 
                                <td>{{ $p->harga_jual }}</td> 
                            </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
