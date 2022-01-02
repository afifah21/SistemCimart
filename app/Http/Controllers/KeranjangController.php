<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;


class KeranjangController extends Controller
{
    public function __construct(){
        $this->Keranjang = new Keranjang();
    }

    public function index(){
    	$data = ['keranjang' => $this->Keranjang->allData()];
        return view('webpage.keranjang', $data);
    }

    public function store(Request $request,$idProduct){
        $datetime = date_create()->format('Y-m-d H:i:s');
        
                    $data =[
                        'id_product' => $idProduct,
                        'id_user' => Auth::id(),
                        'kuantitas' => Request()->kuantitas,
                        'created_at' => $datetime,
                        'updated_at' => $datetime,
                    ];
        
                    $this->Keranjang->insertData($data); 
                    return redirect('keranjang');
                }




}
