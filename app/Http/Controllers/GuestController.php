<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class GuestController extends Controller
{

    public function index(){
        return view('guest.index');
    }

    public function login(){

        $inputs = Input::except(['_token']);

        if(Auth::attempt($inputs)){
            return redirect()->route('user.index');
        }

        Flash::error('Usuario y/o password incorrectos.');

        return redirect()->route('guest.index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('guest.index');
    }

}
