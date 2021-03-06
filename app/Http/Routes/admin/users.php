<?php

Route::group(['prefix'=>'users'],function(){
    Route::get('/',[
        'uses'  =>  'UserController@index',
        'as'    =>  'user.index'
    ]);

    Route::get('/create',[
        'uses'  =>  'UserController@create',
        'as'    =>  'user.create'
    ]);

    Route::get('{id}/edit',[
        'uses'  =>  'UserController@edit',
        'as'    =>  'user.edit'
    ]);

    Route::put('{id}/edit',[
        'uses'  =>  'UserController@update',
        'as'    =>  'user.update'
    ]);

    Route::post('/create',[
        'uses'  =>  'UserController@save',
        'as'    =>  'user.save'
    ]);

    Route::delete('{id}',[
        'uses'  =>  'UserController@delete',
        'as'    =>  'user.delete'
    ]);
});