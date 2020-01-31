<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function () {
        return view('Admin.index');
    });
    Route::resource('/team','TeamController');
    Route::resource('/event','EventController');
    Route::resource('/schedule','ScheduleController');
    Route::resource('/coordinator','CoordinatorController');

});
