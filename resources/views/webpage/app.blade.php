<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <link rel="stylesheet" type="text/css" href="/webasset/css/style.css">
    <link rel="shortcut icon" href="/webasset/img/cimart logo.png" type="image/x-icon" height="50px" width="50px">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <title>Cimart</title>
</head>
<body>

    <div class="cimart">
        <h1 class = "cimart-text">Cimart</h1>
    </div>
    <div class="wrapper">
        <div class="top_nav">
            <div class="left">
                <img class = "logo" src="/webasset/img/cimartKecil.png">
            </div> 
            <div class="right">
                <ul>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <div class="dropdown">
                        <button class="btn btn-outline-orange dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="m-0 p-0">Hi, {{ Auth::user()->name }}</h5>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="{{ route('dashboard.user') }}"> <button href="" class="dropdown-item" type="button">Edit Profile</button> </a>
                            <button href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" type="button">Logout</button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                        <!-- <li class="nav-item dropdown">
                            <a href="{{ route('dashboard.user') }}">
                                <h5 class="m-0 p-0">Hi, {{ Auth::user()->name }}</h5>
                            </a>
                        </li> -->
                    @endguest
                    <li><a href="keranjang"><img src="/webasset/img/cart.png"></a></li>
                </ul>
            </div>
        </div>
        <div class="bottom_nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Makanan</a></li>
                <li><a href="#">Fresh Food</a></li>
                <li><a href="#">Aksesoris</a></li>
                <li><a href="#">Lainnya</a></li>
            </ul>
        </div>

        @yield('content')
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>