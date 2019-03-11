<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Church;

class ChurchControll extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $churches = Church::all()->searchable();;
         $x =1;
         return view('churches.index',compact('churches','x'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Church $church)
    {
        return view('churches.church_dashboard',compact('church'));
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

    //list all families belongs to this church
        public function getFamilies(Church $church){

            $families = $church->families()->get();

            return view('churches.families', compact(['families','church']));
            }

        public function getCreateNewFamily(Church $church){
            return view('churches.church_addFamily',compact('church'));
        }

    public function createNewFamily(Church $church,Request $request){
        $familyName = $request->input('husband'). ' + '.$request->input('wife');
           $family = $church->families()->create([
            'name'=>$familyName,
            ]);
            //return view('families.family_dashboard',compact(['family','church','success'=>'Family created, Select add memder to start add members to this family.']));
            return redirect()->route('family.dashboard',$family)->with('success','Family created, Select add memder to start add members to this family.');

    }
    public function search(Request $request){
      $churches =   Church::search($request->search)->get();
        return view('churches.search.results',compact('churches'));
    }
}
