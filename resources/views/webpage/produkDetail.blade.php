@extends('webpage.app')
@section('content')
<div class = "detailContainer">
          <div class="produkImage">
                  <img src="/products/{{$products->image}}" width="400" height="400" class="produkGambar">
          </div>

          <div class="detailProduk">
              <h1>{{$products->title}}</h1>
              <h3>Rp.{{$products->harga}}</h3>

              <form action="{{ url('keranjang/'.$products->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
              <!-- <div class="varian">
                  <div>Varian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                  <div>
                      <div class="dropdown">
                          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown button
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </div>
                  </div>
              </div> -->
              

              <div class="kuantitas">
                  <div>Kuantitas : </div>
                  <div>
                  <input  type="text" class="form-control" id="kuantitas" placeholder="Enter kuantitas" name="kuantitas" required>
                  </div>
              </div>

              <div class="longButton">
                  <button type="submit" class="buttonAddTroli" name="action" value="buttonAddTroli">Tambah Ke Troli</button> 
                  <button type="submit" class="buttonBeliSegera" name="action" value="buttonBeliSegera">Beli Segera</button>
              </div>
          </form>

              <div class="kuantitas">
                <div><h4>Deskripsi</h4></div>
                <?php $deskripsi= explode(PHP_EOL, $products->deskripsi); ?>
                    @foreach($deskripsi as $paragraph)
                        <p>{{{ strip_tags($paragraph) }}}</p>
                    @endforeach
            </div>


          </div>
@endsection