<?php


Route::group(['prefix'  =>  'users'], function(){

    Route::get('view/{id?}',[
        'uses'   =>  'UserController@index',
        'as'    =>  'userList'
    ]);

});
