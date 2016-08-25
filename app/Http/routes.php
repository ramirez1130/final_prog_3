<?php

Route::group(['prefix'  =>  'users'], function(){

    Route::get('/',[
        'uses'  =>  'UserController@index',
        'as'    =>  'userList'
    ]);

});
