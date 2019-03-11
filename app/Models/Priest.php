<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Church;
use App\Models\User;

class Priest extends Model
{
    protected $fillable =['title','fname','dob','lname','email','church_id','user_id'];

    public function church(){
        return $this->belongsTo(Church::class);
    }
    public function getName()
     {   $fullName = $this->title .' '.$this->fname .' '.$this->lname ;
        return $fullName;

     }


}
