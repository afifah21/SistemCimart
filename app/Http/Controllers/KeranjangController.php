<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;
use App\Models\Pesanan;
use App\Models\Product;
use Redirect;


class KeranjangController extends Controller
{
    public function __construct(){
        $this->Keranjang = new Keranjang();
        $this->Pesanan = new Pesanan();
        $this->Product = new Product();
    }

    public function index(){
    	$data = ['keranjang' => $this->Keranjang->allData()];
        return view('webpage.keranjang', $data);
    }

    public function showOneData($id){
        $keranjangs = Keranjang::all();
        $data = ['keranjang' => $this->Keranjang->allData(), 
                'allProducts' => $this->Product->getTopTenProduct()];
                
                
        return view('webpage.keranjang', compact('keranjang'));
    }

    public function store(Request $request,$idProduct){

        if ($_POST['action'] == 'buttonAddTroli') {
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
        } else if ($_POST['action'] == 'buttonBeliSegera') {
            $datetime = date_create()->format('Y-m-d H:i:s');
        
                    $data =[
                        'id_product' => $idProduct,
                        'name'=> Auth::user()->name,
                        'id_user' => Auth::id(),
                        'kuantitas' => Request()->kuantitas,
                        'created_at' => $datetime,
                        'updated_at' => $datetime,
                    ];
                    
                    $idPesanan = $this->Pesanan->insertData($data);
                    return redirect()->to('pesanan/'.$idPesanan);

                    
        }

        
    }

                




}
