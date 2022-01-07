@extends('dashboard.layout.app')
@section('title_dashboard',"Edit $profile->name Profile")
@section('dashcontent')
<section class="row">
    <div class="col-12 bg-white p-5 rounded-3">
        <h3>Ganti Password {{ $profile->name }}</h3>

        <form action="{{ route('profile.changed',$profile->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('forms.input',['label'=>"Password Sekarang",'name'=>'password','placeholder'=>'Password Sekarang','type'=>'password','value'=>''])
            @include('forms.input',['label'=>"Password Baru",'name'=>'newpassword','placeholder'=>'Password Baru','type'=>'password','value'=>''])
            @include('forms.input',['label'=>"Konfirmasi Password Baru",'name'=>'cnewpassword','placeholder'=>'Konfirmasi Password Baru','type'=>'password','value'=>''])
            <button type="submit" class="btn btn-primary mt-4">Perbarui</button>
        </form>
    </div>
</section>
@endsection