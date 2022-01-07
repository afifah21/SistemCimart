@extends('dashboard.layout.app')
@section('title_dashboard',"Edit $pesanan->name Menu")
@section('dashcontent')
<section class="row">
    <div class="col-12 bg-white p-5 rounded-3">
        <h3>Edit Pesanan {{ $pesanan->nama }}</h3>

        <form action="{{ route('transaksi.update',$pesanan->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('forms.input',['label'=>"Nama Pemesan",'name'=>'name','placeholder'=>'','type'=>'text','value'=>old('name',$pesanan->name)])
            @include('forms.input',['label'=>"No HP",'name'=>'no_hp','placeholder'=>'','type'=>'text','value'=>old('no_hp',$pesanan->no_hp)])
            @include('forms.input',['label'=>"Kuantitas",'name'=>'kuantitas','placeholder'=>'','type'=>'text','value'=>old('kuantitas',$pesanan->kuantitas)])
            <div class="mb-3">
                <label>Alamat Pengiriman</label>
                <textarea name="alamat" class="form-control text-dark" cols="30" rows="10">{{ (isset($pesanan->alamat))?$pesanan->alamat:''}}</textarea>
            </div>
            <div class="mb-3">
                <label>Metode Pembayaran</label>
                <select name="id_ekspedisi" required class = "form-control" >
                    @foreach(\App\Models\Expedisi::all() as $expedisi)
                        @if ($expedisi->id == $pesanan->id_ekspedisi)
                            <option value="{{$expedisi->id}}" selected>
                                {{$expedisi->ekspedisi}}
                            </option>
                            @else
                            <option value="{{$expedisi->id}}">
                                {{$expedisi->ekspedisi}}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Metode Pembayaran</label>
                <select name="id_pembayaran" required class = "form-control" >
                    @foreach(\App\Models\Pembayaran::all() as $pembayaran)
                        @if ($pembayaran->id == $pesanan->id_pembayaran)
                            <option value="{{$pembayaran->id}}" selected>
                                {{$pembayaran->payment}}
                            </option>
                            @else
                            <option value="{{$pembayaran->id}}">
                                {{$pembayaran->payment}}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Perbarui</button>
        </form>
    </div>
</section>
@endsection