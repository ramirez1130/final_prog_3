<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Team;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;

class TeamController extends Controller
{

    public function index(){

        $teams = Team::orderBy('id','ASC')->paginate(7);
        return view('admin.teams.index')->with( 'teams' , $teams);

    }

    public function create(){
        //return view('admin.teams.create');
        dd(2);
    }

    public function save(){
        $input = Input::all();

        $validator = Validator::make($input,Team::$rules);

        if($validator->fails()) {
            return redirect()
                ->route('teams.create')
                ->withInput()
                ->withErrors($validator);
        }

        Team::create($input);

        Flash::success("El equipo se creo exitosamente!");

        return redirect()->route('teams.index');
    }

    public function edit($id){

        $teams = Team::find($id);

        return view('admin.teams.edit')->with('teams',$teams);

    }

    public function update($id){
        $input = Input::all();

        $validator = Validator::make($input,Team::$rules);

        if($validator->fails()) {
            return redirect()
                ->route('teams.edit',[$id])
                ->withInput()
                ->withErrors($validator);
        }

        $team = Team::findOrFail($id);
        $team->update($input);

        Flash::success("El equipo se actualizo exitosamente!");

        return redirect()->route('teams.index');

    }

    public function delete($id){

        Team::destroy($id);

        Flash::error("El equipo se elimino exitosamente!");
        return redirect()->route('teams.index');

    }

}
