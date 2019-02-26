<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=> 'account', 'middlware'=>'auth','as'=>'account'] , function(){
    Route::get('/dashboard/{user}', 'AccountController@index')->name('.dashboard');

});
Route::group(['prefix' => 'parish', 'as' => 'parish'], function () {
    Route::get('/all', 'ParishController@index')->name('.all');
    Route::get('{parish}/regions', 'ParishController@show')->name('.regions');
    Route::get('{parish}/churches', 'ParishController@getChurches')->name('.churches');
});
Route::group( ['prefix'=>'church','middleware' => ['auth'],'as'=>'church'], function () {
    Route::get('/dashboard/{church}', "ChurchControll@index")->name('.dashboard');
    Route::get('families/{church}', "ChurchControll@getFamilies" )->name('.families');
});
Route::group( ['prefix'=>'family','middleware' => ['auth'],'as'=>'family'], function () {

    Route::get('members/{family}', "FamilyController@getMembers" )->name('.members');
    Route::post('/addnewmember/{family}', "FamilyController@AddFamilyMember")->name('.addNewMember');
});
