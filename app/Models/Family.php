<?php

namespace App\Models;

use App\Models\User;
use App\Models\Church;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

    protected $fillable = [
        'id', 'name','church_id'
    ];

    public function Users()
    {
        return $this->hasMany(User::class);
    }
public function church()
{
    return $this->belongsTo(Church);
}
}
