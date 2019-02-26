<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Family;

class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'family_id', 'user_id', 'title', 'fname', 'lname', 'email', 'gender', 'mobile', 'house', 'address', 'postcode', 'dob', 'avatar', 'live',
    ];
    public function family(){
        return $this->belongsTo(Family::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
