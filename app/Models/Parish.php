<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\models\Region;
use App\models\Church;
use Laravel\Scout\Searchable;

class Parish extends Model
{
    use Searchable;

    protected $fillable = ['id', 'name', 'bishop', 'avatar'];

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function churches()
    {
        return $this->hasMany(Church::class);
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

}
