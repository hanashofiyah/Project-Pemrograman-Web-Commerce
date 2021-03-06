@extends('layouts.app')

@section('content')
{{-- <head>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>
</head> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="700" alt="">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-3">
            <div class="card">
              <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    {{-- <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }}  --}}
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="bi bi-cart-fill"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection