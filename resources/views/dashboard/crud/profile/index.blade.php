@extends('dashboard.layout.app')
@section('title_dashboard','List Transaksi Index')
@section('dashcontent')
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-11 col-md-7 col-lg-4 mx-auto bg-white rounded-3 p-3">
                <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded-3 mb-4">
                    <h2 class="text-muted fw-bold m-0">Profile Anda</h2>
                    <a href="{{ route('profile.edit',$profile->id) }}" class="text-decoration-none"><i class="bi bi-pencil-square fs-3"></i></span></a>
                </div>
                <h5 class="fw-bold text-center mb-4">{{ $profile->name }}</h5>
                <div class="border-bottom p-2">
                    <div class="text-muted fs-6">Email</div>
                    <p class="m-0">{{ $profile->email }}</p>
                </div>
                <div class="border-bottom p-2">
                    <div class="text-muted fs-6">Password</div>
                    <p class="m-0"><a href="{{ route('profile.change',$profile->id) }}">Ganti Password</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection