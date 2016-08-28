<?php

Route::group(['prefix'=>'teams'],function(){
    Route::get('/',[
        'uses'  =>  'TeamController@index',
        'as'    =>  'team.index'
    ]);

    Route::get('/create',[
        'uses'  =>  'TeamController@create',
        'as'    =>  'team.create'
    ]);

    Route::get('{id}/edit',[
        'uses'  =>  'TeamController@edit',
        'as'    =>  'team.edit'
    ]);

    Route::put('{id}/edit',[
        'uses'  =>  'TeamController@update',
        'as'    =>  'team.update'
    ]);

    Route::post('/create',[
        'uses'  =>  'TeamController@save',
        'as'    =>  'team.save'
    ]);

    Route::delete('{id}/delete',[
        'uses'  =>  'TeamController@delete',
        'as'    =>  'team.delete'
    ]);
});