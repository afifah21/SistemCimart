<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembeliController extends Controller
{
    public function index()
    {
        $pembeli = Pesanan::groupBy('name')->get();
        return view('dashboard.crud.pembeli.index',compact('pembeli'));
    }
    public function show($id)
    {
        $id = $id;
        $pesanan = Pesanan::where('id_user',$id)->get();
        return view('dashboard.crud.pembeli.show',compact('pesanan','id'));
    }
}
