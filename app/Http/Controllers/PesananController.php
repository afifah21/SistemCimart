<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{

    public function __construct(){
        $this->Pesanan = new Pesanan();
    }

    public function show($id){
           $data = ['pesanan' => $this->Pesanan->getOneValue($id)];
                return view('webpage.checkout', $data);
    }
}
