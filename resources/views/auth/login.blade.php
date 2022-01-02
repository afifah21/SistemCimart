@extends('webpage.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="center">
        <h1>Login</h1>
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('email') is-invalid @enderror" name="password" value="" required>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn-login">Login</button>
        <p class="lupa-sandi"><a href="{{ url('password/reset') }}">Lupa Kata Sandi?</a></p>
        <p class="daftar-login"><a href=" {{ route('register') }} ">Daftar?</a></p>
    </div>
</form>

@endsection
