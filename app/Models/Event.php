<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['id', 'name', 'date', 'start_at', 'end_at'];

    protected $dates = ['date', 'start_at', 'end_at'];
}
