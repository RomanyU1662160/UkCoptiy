<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Family;
use App\Models\Member;
use App\Models\Church;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Family $family)
    {
       return view('families.family_dashboard',compact('family'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //return view('families.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Family $family)
    {
       return view('families.family_details',compact('family'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getMembers(Family $family){
 $members =$family->members()->get();
 return view('members.templates.member_template', compact('members','family'));

    }
    public function AddFamilyMember(Family $family, Request $request){
$family->members()->create([
'title'=>$request->input('title'),
'fname'=>$request->input('fname'),
'lname'=>$request->input('lname'),
'dob'=>$request->input('dob')
]);
$members = $family->members()->get();
//return response()->view('members.templates.member_template', compact('members','family'));
return redirect()->back()->with(['members'=>$members,'family'=>$family]);
}



}
