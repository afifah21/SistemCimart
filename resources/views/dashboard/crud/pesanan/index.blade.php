@extends('dashboard.layout.app')
@section('title_dashboard','List Transaksi Index')
@section('dashcontent')
<section class="row">
    <div class="col-12 p-4 bg-white rounded-3">
        <h3 class="float-start">List Transaksi</h3>
        
        <div class="mt-4 table-responsive w-100">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">Product</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Pemesan</th>
                        <th scope="col">Metode</th>
                        <th scope="col">Status</th>
                        <th scope="col">Waktu Pesan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pesanan as $pesanan)
                    <tr>
                        <th>{{ $loop->index+1 }}</th>
                        <td>{{ $pesanan->id }}</td>
                        <td>
                            <div class="d-flex align-items gap-3">
                                <img src="/products/{{ $pesanan->product->image }}" alt="{{ $pesanan->product->title }}" class="d-block" style="width: auto;max-height:3em;object-fit:cover;">
                                <p class="fw-bold m-0">
                                    {{ $pesanan->product->title }}
                                </p>
                            </div>
                        </td>
                        <td>{{ $pesanan->kuantitas }}</td>
                        <td>{{ $pesanan->name }}</td>
                        <td>{{ (isset($pesanan->pembayaran->jenis))?$pesanan->pembayaran->payment:'-' }}</td>
                        <td>{{ $pesanan->status }}</td>
                        <td>{{ $pesanan->created_at }}</td>
                        <td class="text-center">
                            <a href="{{ route('transaksi.show',$pesanan->id) }}" class="btn btn-sm btn-success">DETAIL</a>
                            <a href="{{ route('transaksi.edit',$pesanan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center text-mute" colspan="9">Data tidak tersedia</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection