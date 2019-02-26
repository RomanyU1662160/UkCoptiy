<?php

namespace App\Models;

use App\Models\User;
use App\Models\Member;
use App\Models\Church;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

    protected $fillable = [
        'id', 'name','church_id'
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
public function church()
{
    return $this->belongsTo(Church);
}
}
