<?php


Route::get('/','\App\Http\Controllers\Admin\DashboardController@dashboard');

Route::group(['middleware'=>['auth']],function(){

    Route::group(['prefix' => 'admin'], function(){

        Route::group(['namespace' => 'Admin'],function(){



        });
    });
});

