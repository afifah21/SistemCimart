<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedisi extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'expedisi';

        public function pesanans()
    {
        return $this->hasMany('App\Expedisi');
    }
}
