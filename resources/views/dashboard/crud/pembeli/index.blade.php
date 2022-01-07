@extends('dashboard.layout.app')
@section('title_dashboard','List Pembeli Index')
@section('dashcontent')
<section class="row">
    <div class="col-12 p-4 bg-white rounded-3">
        <h3 class="float-start">List Pembeli</h3>
        
        <div class="mt-4 table-responsive w-100">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pembeli as $pesanan)
                    <tr>
                        <th>{{ $loop->index+1 }}</th>
                        <td>{{ $pesanan->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('pembeli.show',$pesanan->id_user) }}" class="btn btn-sm btn-success">CEK PESANAN</a>
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