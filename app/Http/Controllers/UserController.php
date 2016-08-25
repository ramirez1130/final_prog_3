<?php

namespace App\Http\Controllers;


use App\Models\User;

class UserController extends Controller
{

    public function index(){

        $users = User::orderBy('id','ASC')->paginate(7  );
        return view('admin.users.index')->with( 'users' , $users );
    }

    public function create(){
        dd("Vista del formulario para crear un usuario");
    }

    public function save(){
        dd("Guardar el usuario creado");
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