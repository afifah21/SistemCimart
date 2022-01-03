@extends('webpage.app')
@section('content')
<div class="containerKeranjang">
          <h1>Keranjang Belanja</h1>

      @foreach ($keranjang as $data)
          <div class="produkContainer">
            <div class="imageProduk">
                <img src="" width="200px" height="200px">
            </div>
            <div class="detailProdukKeranjang">
                <h4>{{$data->id}}</h4>
                <div class="varian">
                  <div>Kuantitas : </div>
                  <div>
                      <p>{{$data->kuantitas}}</p>
                  </div>
                </div>
            </div>
          </div>
      @endforeach

      </div>

      <div class="hargaBox">
        <div class="totalProduk">
          <h1>Total Produk : </h1>
          <h2>Rp.120.000</h2>
        </div>
          <button type="button" class="buttonBayar">Bayar</button>
      </div>
@endsection