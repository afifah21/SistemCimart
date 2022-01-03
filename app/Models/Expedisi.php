<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Expedisi extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'expedisis';

        public function pesanans()
    {
        return $this->hasMany('App\Expedisi');
    }

    public function allData()
    {
        return DB::table('expedisis')->get();
    }
}
