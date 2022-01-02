<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Keranjang extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('keranjangs')->get();
    }

    public function insertData($data)
    {
    	DB::table('keranjangs')->insert($data);
    }
}
