<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{

    public function __construct(){
        $this->Product = new Product();
    }

    public function index(){
    	$data = ['products' => $this->Product->getTopTenProduct()];
        return view('webpage.home', $data);
    }
    

    public function show($id, Request $request){
        $method = $request->method();
        if ($request->isMethod('post')) {
            //update function
            $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->nama,
                'nim' => Request()->NIM,
                'tanggal_lahir' => Request()->tgllahir,
                'alamat' => Request()->alamat,
                'tahun_masuk'=> Request()->thnmasuk,
                'update_at' => $datetime,
            ];


            $this->Mahasiswa->updateData($data,$id); 
            return redirect('mahasiswa');
            }
            //---
        else{

           $data = ['products' => $this->Product->getOneValue($id)];
                return view('webpage.produkDetail', $data);
            }
    }
}
