@extends('dashboard.layout.app')
@section('title_dashboard',"Detail Pesanan $pesanan->name")
@section('dashcontent')
<section class="row">
    <div class="col-12">
        <a href="{{ url()->previous() }}" class="d-block blue mb-3">Kembali</a>
        <div class="d-flex align-items-center justify-content-start gap-3">
            <i class="bi bi-clipboard fs-5 p-3 pb-2 bg-white rounded-3 d-inline-block" style="width: auto;height:auto"></i>
            <h3>Detail Pesanan</h3>
        </div>
        <div class="col-12 bg-white p-4 rounded-3 my-4">
            <div class="border-bottom border-light py-2">
                <div class="d-flex align-items gap-3">
                    <img src="/products/{{ $pesanan->product->image }}" alt="{{ $pesanan->product->title }}" class="d-block" style="width: auto;max-height:3em;object-fit:cover;">
                    <div>
                        <p class="fw-bold m-0">
                            {{ $pesanan->product->title }}
                        </p>
                        <p class="m-0">Jumlah Pesanan : <strong>{{ $pesanan->kuantitas }}</strong></p>
                    </div>
                </div>
            </div>
            <div class="border-bottom border-light py-2">
                <label>Nama Pemesan</label>
                <h5 class="my-1"><strong>{{ $pesanan->name }}</strong></h5>
            </div>
            <div class="border-bottom border-light py-2">
                <label>No Hp</label>
                <h5 class="my-1"><strong>{{ $pesanan->no_hp }}</strong></h5>
            </div>
            <div class="border-bottom border-light py-2">
                <label>Alamat</label>
                <h5 class="my-1"><strong>{{ $pesanan->alamat }}</strong></h5>
            </div>
            <div class="border-bottom border-light py-2">
                <label>Expedisi</label>
                <h5 class="my-1"><strong>{{ (isset($pesanan->ekspedisi->ekspedisi)?$pesanan->ekspedisi->ekspedisi:'-') }}</strong></h5>
            </div>
            <div class="border-bottom border-light py-2">
                <label>Metode Pembayaran</label>
                <h5 class="my-1"><strong>{{ (isset($pesanan->pembayaran->jenis))?$pesanan->pembayaran->payment:'-' }}</strong></h5>
            </div>
            <div class="border-bottom border-light py-2">
                <label>Status</label>
                <h5 class="my-1"><strong>{{ $pesanan->status }}</strong></h5>
            </div>
            <div class="border-bottom border-light py-2">
                <label>Waktu Pesan</label>
                <h5 class="my-1"><strong>{{ $pesanan->created_at }}</strong></h5>
            </div>
        </div>
    </div>
</section>
@endsection