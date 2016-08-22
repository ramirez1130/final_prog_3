<?php

namespace App\Http\Controllers;


use App\Models\User;

class UserController extends Controller
{

    public function index($id = 'all'){

        if( $id == 'all' ){
            $user = User::all()->where('type','player');
        }else{
            $user = User::find($id);
        }
        dd($user);
    }
    
}