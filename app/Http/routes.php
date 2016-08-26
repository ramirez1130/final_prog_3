<?php

Route::group(['prefix'  =>  'users'], function(){

    Route::get('/',[
        'uses'  =>  'UserController@index',
        'as'    =>  'user.index'
    ]);

    Route::get('/create',[
        'uses'  =>  'UserController@create',
        'as'    =>  'user.create'
    ]);

    Route::post('/create',[
        'uses'  =>  'UserController@save',
        'as'    =>  'user.save'
    ]);

});
