<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded =[];

    protected $table = 'pembayarans';

        public function pesanans()
    {
        return $this->hasMany('App\Pembayaran');
    }

    public function allData()
    {
        return DB::table('pembayarans')->get();
    }
}
