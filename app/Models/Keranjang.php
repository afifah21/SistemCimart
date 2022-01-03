<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjangs';


	public function user()
    {
        return $this->belongsTo(Users::class, 'id_user', 'id');
    }
	public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function allData()
    {
        return DB::table('keranjangs')->get();
    }

    public function insertData($data)
    {
        DB::table('keranjangs')->insert($data);
    }

    public function getOneValue($id)
    {
        return DB::table('keranjangs')->where('id', $id)->first();
    }

    public function getUserKeranjang($id)
    {
        return DB::table('keranjangs')->where('id_user', $id)->first();
    }

    
}
