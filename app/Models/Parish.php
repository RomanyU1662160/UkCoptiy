<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\models\Region;
use App\models\Church;

class Parish extends Model
{
    protected $fillable = ['id', 'name', 'bishop', 'avatar'];

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function churches()
    {
        return $this->hasMany(Church::class);
    }


}
