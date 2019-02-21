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
    Route::get('/dashboard/{church}', "churchControll@index")->name('.dashboard');
    Route::get('families/{church}', "churchControll@getFamilies" )->name('.families');
});
