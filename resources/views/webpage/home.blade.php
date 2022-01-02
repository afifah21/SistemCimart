@extends('webpage.app')
@section('content')
<div class = "containers">
    <h1>Just Arrived!</h1>
    <div class="row row-cols-1 row-cols-md-3" id="produkID">
        @foreach ($products as $data)
        <div class="col mb-4">
        <a href="products/{{$data->id}}">
            <div class="card">
            <img src="/products/{{$data->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                 <h5 class="card-title">{{$data->title}}</h5> 
                <p class="card-text">{{$data->harga}}</p>
            </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="py-5">
    
    <!-- <div class="container">
    	<h1>Best Sellers</h1>
      <div class="row hidden-md-up">
      @foreach ($products as $data) 
        <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <img src="/products/{{$data->image}}" width="350px" height="350px">
              <h5 class="card-text">{{$data->title}}</h5>
              <h3>{{$data->harga}}</h3>

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div> -->
</div>
@endsection