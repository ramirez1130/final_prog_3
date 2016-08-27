@extends('admin.template.main')

@section('section','Login')

@section('content')
    {!! Form::open(['route' =>  'guest.login' , 'method'    =>  'POST']) !!}
        <div class="form-group">
            {!! Form::label('username','Nombre de usuario') !!}
            {!! Form::text('username',null,['class' =>  'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Contraseña') !!}
            {!! Form::password('password',null,['class' =>  'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Entrar',['class'  =>  'btn btn-success col-lg-12']) !!}
        </div>
    {!! Form::close() !!}

@endsection