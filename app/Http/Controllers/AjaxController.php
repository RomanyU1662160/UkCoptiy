<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Family;
use App\Models\Member;
use App\Models\Church;


class AjaxController extends Controller
{
    public function SearchChurchFamilies(Church $church){
    $x=1;
    $families = $church->families()->get();
return view('churches.church_familiesSearch',compact('families','church','x'));
    }
}
