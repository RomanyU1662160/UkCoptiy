<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Parish;

class Region extends Model
{
    protected $fillable = [];


    public function parish()
    {
        return $this->belongsTo(Parish::class);

    }
}
