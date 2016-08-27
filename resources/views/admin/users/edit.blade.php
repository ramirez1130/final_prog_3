@extends('admin.template.main')

@section('section','Editar usuario ' . $user->name . ' ' . $user->lastname )

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $unError)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{$unError}}
            </div>
        @endforeach
    @endif

    {!! Form::open(['route' =>  ['user.update',$user->id], 'method'  =>  'PUT']) !!}

    <div class="form-group col-lg-6">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$user->name,['class' =>  'form-control','required']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('lastname','Apellido') !!}
        {!! Form::text('lastname',$user->lastname,['class' =>  'form-control','required']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('username','Nombre de usuario') !!}
        {!! Form::text('username',$user->username,['class' =>  'form-control','required']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('password','Contraseña') !!}
        {!! Form::password('password',['class' =>  'form-control','required']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('email','Correo electronico') !!}
        {!! Form::email('email',$user->email,['class'   =>  'form-control','required']) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('dni','DNI') !!}
        {!! Form::text('dni',$user->dni,['class'   =>  'form-control','required']) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('type','Tipo de usuario') !!}
        {!!
            Form::select('type',[
                ''              =>  'Seleccionar nivel',
                'player'        =>  'Jugador',
                'owner-court'   =>  'Dueño de cancha',
                'admin'         =>  'Administrador'
            ],null,['class' =>  'form-control'])
        !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('gender_id','Sexo') !!}
        {!! Form::select('gender_id',$genders,null,['class'   =>  'form-control']) !!}
    </div>
    <div class="form-group col-lg-12">
        {!! Form::submit('Actualizar',['class'  =>  'btn btn-success']) !!}
        <?= link_to_route('user.index', 'Volver al listado', [], ['class' => 'btn btn-warning']); ?>
    </div>

    {!! Form::close() !!}

@endsection