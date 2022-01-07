@extends('dashboard.layout.app')
@section('title_dashboard',"Edit $profile->name Profile")
@section('dashcontent')
<section class="row">
    <div class="col-12 bg-white p-5 rounded-3">
        <h3>Edit Profile {{ $profile->name }}</h3>

        <form action="{{ route('profile.update',$profile->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('forms.input',['label'=>"Nama Akun",'name'=>'name','placeholder'=>'','type'=>'text','value'=>old('name',$profile->name)])
            @include('forms.input',['label'=>"Email",'name'=>'email','placeholder'=>'','type'=>'email','value'=>old('email',$profile->email)])
            
            <button type="submit" class="btn btn-primary mt-4">Perbarui</button>
        </form>
    </div>
</section>
@endsection