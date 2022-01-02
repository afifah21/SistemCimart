@extends('webpage.app')
@section('content')
<div class="containerKeranjang">

        <div class="informasiContainer">
            <div class="checkout">
                <div>User : </div>
                <div>
                    <p>081385232452</p>
                </div>
              </div>

              <div class="checkout">
                <div>Alamat : </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vero quaerat numquam aperiam quis eos laborum deserunt id nihil tenetur nobis esse cum officiis impedit, ipsum harum asperiores architecto obcaecati.</p>
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

              <div class="varian">
                <div>Total Harga : </div>
                <div>
                    <p>Rp.120.000</p>
                </div>
              </div>
          </div>

          <div class="notesContainer">
            <div class="checkout">
                <div>Notes : </div>
                <div>
                    <input type="text" id="fname" name="fname" class="notesForm"><br>                
                </div>
          </div>
        </div>

        <div class="metodeContainer">
                <div class="metode">Metode Pembayaran : 
                <div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          COD
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">COD</a>
                          <a class="dropdown-item" href="#">Bank</a>
                        </div>
                      </div>         
                </div>
            </div>
        </div>

        <div class="metodeContainer">
            <div class="metode">Jasa Pengirman : 
            <div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      JNE Regular
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Same Day</a>
                      <a class="dropdown-item" href="#">JNE Express</a>
                    </div>
                  </div>         
            </div>
        </div>
        <div class="hargaBox2">
            <div class="totalProduk">
              <h2>Total Produk : </h1>
              <h6>Rp.120.000</h6>

              <h2>Ongkos Kirim :</h2>
              <h6>Rp.5000</h6>

              <h2>Total</h2>
              <h4>Rp.125.000</h4>
                
            </div>
            <button type="button" class="buttonBayar">Bayar</button>
          </div>
    </div>
@endsection