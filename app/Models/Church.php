<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Parish;
use App\Models\Region;
use App\Models\Family;

class Church extends Model
{
    protected $fillable = [
        'id', 'name', 'postcode', 'address1', 'address2', 'email', 'phone'
    ];

    public function parish()
    {
        return $this->belongsTo(Parish::class);
    }

    public function Region()
    {
        return $this->belongsTo(Region::class);
    }
    public function families()
    {
        return $this->hasMany(Family::class);
    }

}
