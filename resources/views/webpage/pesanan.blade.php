@extends('webpage.app')
@section('content')
<div class="containerKeranjang">
          <h1>Keranjang Belanja</h1>


          <div class="produkContainer">
            <div class="imageProduk">
                <img src="produk.png" width="200px" height="200px">
            </div>
            <div class="detailProdukKeranjang">
                <h4>Lorem Ipsum Sig Dolor Amet</h4>
                <div class="varian">
                  <div>Varian : </div>
                  <div>
                      <p>Opsi A</p>
                  </div>
                </div>

                <div class="varian">
                  <div>Kuantitas : </div>
                  <div>
                      <p>2</p>
                  </div>
                </div>
            </div>
          </div>

          <div class="produkContainer">
            <div class="imageProduk">
                <img src="produk.png" width="200px" height="200px">
            </div>
            <div class="detailProdukKeranjang">
                <h4>Lorem Ipsum Sig Dolor Amet</h4>
                <div class="varian">
                  <div>Varian : </div>
                  <div>
                      <p>Opsi A</p>
                  </div>
                </div>

                <div class="varian">
                  <div>Kuantitas : </div>
                  <div>
                      <p>2</p>
                  </div>
                </div>
            </div>
          </div>


      </div>

      <div class="hargaBox">
        <div class="totalProduk">
          <h1>Total Produk : </h1>
          <h2>Rp.120.000</h2>
        </div>
          <button type="button" class="buttonBayar">Bayar</button>
      </div>
@endsection