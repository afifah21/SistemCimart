<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';


	public function user()
    {
        return $this->belongsTo(Users::class, 'id_user', 'id');
    }
	public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
    public function ekspedisi()
    {
        return $this->belongsTo(Ekspedisi::class, 'id_ekspedisi', 'id');
    }
	public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran', 'id');
    }


    public function allData()
    {
        return DB::table('pesanans')->get();
    }

    public function insertData($data)
    {
    	return DB::table('pesanans')->insertGetId($data);
    }

    public function getOneValue($id)
    {
        return DB::table('pesanans')->where('id', $id)->first();
    }
}
