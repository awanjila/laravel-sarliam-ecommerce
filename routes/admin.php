<?php
Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

});
});

Route::group(['prefix' => 'brands'], function(){
	Route::get('/', 'Admin\BrandController@index')->name('admin.brands.index');
	Route::get('/create', 'Admin\BrandController@index')->name('admin.brands.create');
	Route::get('/store', 'Admin\BrandController@index')->name('admin.brands.store');
	Route::get('/{id}/edit', 'Admin\BrandController@index')->name('admin.brands.edit');
	Route::get('/update', 'Admin\BrandController@index')->name('admin.brands.update');
	Route::get('/{id}/delete', 'Admin\BrandController@index')->name('admin.brands.delete');
});