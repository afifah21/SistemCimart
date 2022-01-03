<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Models\Pesanan;
use App\Models\Product;
use App\Models\Pembayaran;
use App\Models\Expedisi;
use Redirect;


class PesananController extends Controller
{

    protected $table = 'pesanans';

    public function __construct(){
        $this->Pesanan = new Pesanan();
        $this->Product = new Product();
        $this->Pembayaran = new Pembayaran();
        $this->Expedisi = new Expedisi();
    }

    public function index(){
        $pesanans = Pesanan::all();
        // $data = ['pesanan' => $this->Pesanan->allData()];
        return view('webpage.checkout',compact('pesanans'));
    	
        // return view('webpage.keranjang', $data);
    }

    public function show($id, Request $request){
        $method = $request->method();

        if($request->isMethod('post')) {
            $idPesanan = $id;
            $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'no_hp' => Request()->phone,
                'alamat' => Request()->alamat,
                'id_ekspedisi' => Request()->idExpedisi,
                'id_pembayaran' => Request()->idPembayaran,
                'status' => 'BELUM DIBAYAR',
                'updated_at' => $datetime,
                'message' => Request()->note,
            ];

        $this->Pesanan->updateData($data,$idPesanan); 
        return view('webpage.pesananproses');

        }
        else{
            $pesanans = Pesanan::where('id',$id)->first();
        
           $data = ['allPembayaran' => $this->Pembayaran->allData(),
                    'allExpedisi' => $this->Expedisi->allData()];
                return view('webpage.checkout', compact('pesanans'),$data);
        }
        
    }

}
