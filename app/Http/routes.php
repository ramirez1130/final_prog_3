<?php

Route::get('/',[
    'uses'  =>  'GuestController@index',
    'as'    =>  'guest.index'
]);

Route::post('login',[
    'uses'  =>  'GuestController@login',
    'as'    =>  'guest.login'
]);

Route::get('logout',[
    'uses'  =>  'GuestController@logout',
    'as'    =>  'guest.logout'
]);

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    require 'Routes/admin/users.php';
    require 'Routes/admin/teams.php';
    require 'Routes/admin/tournaments.php';
    require 'Routes/admin/courts.php';
    require 'Routes/admin/matches.php';
});
