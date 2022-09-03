<?php

use App\Http\Controllers\bioC;

Route::get('/', function () {
    return view('Add');
});

Route::POST('add','bioC@add');
Route::get('show','bioC@show');
Route::get('delete/{id}','bioC@del');
Route::get('edit/{id}','bioC@edit');
Route::POST('update/{id}','bioC@update');


