@extends('webpage.app')
@section('content')
<div class="containerKeranjang">

        <div class="informasiContainer">
        <form action="{{ url('pesanan/'.$pesanans->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="varian">
                <div h2> Data Pembeli </div h2>
              </div>
            <div class="checkout">
                <div>No. Telp : </div>
                <div>
                  <input type="phone" id="phone" name="phone" class="notesForm"><br>
                </div>
              </div>

              <div class="checkout">
                <div>Alamat : </div>
                <div>
                  <input type="text" id="alamat" name="alamat" class="notesForm"><br> 
                </div>
              </div>
        </div>
        <div class="produkContainer">
          <div class="imageProduk">
              <img src="{{URL::to('/')}}/products/{{ $pesanans->product->image }}" width="200px" height="200px">
          </div>
          <div class="detailProdukKeranjang">
              <h4>{{ $pesanans->product->title }}</h4>

              <div class="varian">
                <div>Kuantitas : </div>
                <div>
                    <p>{{ $pesanans->kuantitas }}</p>
                </div>
              </div>

              <div class="varian">
                <div>Total Harga : </div>
                <div>
                    <p>{{ $pesanans->product->harga }}</p>
                </div>
              </div>
          </div>

          <div class="notesContainer">
            <div class="checkout">
                <div>Notes : </div>
                <div>
                    <input type="text" id="note" name="note" class="notesForm"><br>                
                </div>
          </div>
          
        </div>
        

        <div class="metodeContainer">
                <div class="metode">Metode Pembayaran : 
                <div>
                    <div class="dropdown">
                        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          COD
                        </button> -->
                        <select name="idPembayaran" required id="idPembayaran" class = "form-control" >
                            <option value="" disabled selected>
                              Metode Pembayaran
                            </option>
                            @foreach($allPembayaran as $pembayaran)
                            <option value="{{$pembayaran->id}}">
                              {{$pembayaran->payment}}
                            </option>
                            @endforeach
                      </select>
                        </div>
                      </div>         
                </div>
            </div>
        </div>

        <div class="metodeContainer">
            <div class="metode">Jasa Pengirman : 
            <div>
                <div class="dropdown">
                    <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      JNE Regular
                    </button> -->
                    <select name="idExpedisi" required id="idExpedisi" class = "form-control" >
                            <option value="" disabled selected>
                              Ekspedisi Pengiriman 
                            </option>
                            @foreach($allExpedisi as $expedisi)
                            <option value="{{$expedisi->id}}">
                              {{$expedisi->ekspedisi}}
                            </option>
                            @endforeach
                      </select>
                  </div>         
            </div>
        </div>
        <div class="hargaBox2">
            <div class="totalProduk">
              <h2>Total Produk : </h1>
              <h4>{{ $pesanans->product->harga }}</h4>

              <h6>*Ongkos kirim akan diinfokan melalui Whatsapp.</h6>
                
            </div>
            <button type="submit" class="buttonBayar" name="action">Bayar</button> 
          </div>
</form>
    </div>

</div>
    
@endsection