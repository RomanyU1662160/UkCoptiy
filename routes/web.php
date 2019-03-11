<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=> 'account', 'middlware'=>'auth','as'=>'account'] , function(){
    Route::get('/dashboard/{user}', 'AccountController@index')->name('.dashboard');
});
Route::group(['prefix' => 'parish', 'as' => 'parish'], function () {
    Route::post('/search','ParishController@search')->name('.search');
    Route::get('/all', 'ParishController@index')->name('.all');
    Route::get('{parish}/regions', 'ParishController@show')->name('.regions');
    Route::get('{parish}/churches', 'ParishController@getChurches')->name('.churches');
});
Route::group( ['prefix'=>'church','middleware' => ['auth'],'as'=>'church'], function () {
    Route::post('/search','ChurchControll@search')->name('.search');
    Route::get('/all}', "ChurchControll@index")->name('.all');
    Route::get('/dashboard/{church}', "ChurchControll@show")->name('.dashboard');
    Route::get('families/{church}', "ChurchControll@getFamilies" )->name('.families');
    Route::get('newFamily/{church}', "ChurchControll@getcreateNewFamily" )->name('.newFamily');
    Route::post('newFamily/{church}', "ChurchControll@createNewFamily" );
});
Route::group( ['prefix'=>'family','middleware' => ['auth'],'as'=>'family'], function () {
    Route::get('view/{family}', "FamilyController@show" )->name('.view');
    Route::get('dasboard/{family}', "FamilyController@index" )->name('.dashboard');
    Route::get('members/{family}', "FamilyController@getMembers" )->name('.members');
    Route::post('/addnewmember/{family}', "FamilyController@AddFamilyMember")->name('.addNewMember');
    Route::get('/create', "FamilyController@create" )->name('.create');

});
// Member Routes
Route::group( ['prefix'=>'member','middleware' => ['auth'],'as'=>'member'], function () {

    Route::get('update/{member}', "MemberController@edit" )->name('.update');
    Route::post('update/{member}', "MemberController@update" );
});

//Ajax Routes
Route::group( ['prefix'=>'list','middleware' => ['auth'],'as'=>'list'], function () {

    Route::get('families/{church}', "AjaxController@SearchChurchFamilies" )->name('.families');

});
