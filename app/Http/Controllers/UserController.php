<?php

namespace App\Http\Controllers;


use App\Models\Gender;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index(){

        $users = User::orderBy('id','ASC')->paginate(7  );
        return view('admin.users.index')->with( 'users' , $users );

    }

    public function create(){
        $genders = Gender::all()->pluck('gender','id');
        return view('admin.users.create')->with('genders' , $genders);
    }

    public function save(){
        $input = Input::all();
        $password = Hash::make(Input::get('password'));
        $input['password'] = $password;

        $validator = Validator::make($input,User::$rules);

        if($validator->fails()) {
            return redirect()
                ->route('user.create')
                ->withInput()
                ->withErrors($validator);
        }

        User::create($input);

        return redirect()->route('user.index')
            ->with('message', 'El usuario se creo exitosamente!');
    }

    public function edit($id){
        dd("Formulario para editar un usuario. Con el id $id");
    }

    public function update(){
        dd("Actualizar la informacion del usuario editado");
    }

    public function delete($id){
        dd("Eliminar el usuario que recibe por parametro: $id");
    }
    
}