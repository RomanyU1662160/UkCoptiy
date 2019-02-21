<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Famliy;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'family_id', 'password', 'title', 'fname', 'lname', 'email', 'gender', 'mobile', 'house', 'address', 'postcode', 'dob', 'avatar', 'live',
    ];
    public function family()
    {
        return $this->belongsTo(Family::class);
    }





    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
