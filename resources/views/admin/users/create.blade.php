@extends('admin.template.main')

@section('section','Crear usuario')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $unError)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{$unError}}
            </div>
        @endforeach
    @endif

    {!! Form::open(['route' =>  'user.save', 'method'  =>  'POST']) !!}

        <div class="form-group col-lg-6">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class' =>  'form-control','required']) !!}
        </div>
        <div class="form-group col-lg-6">
            {!! Form::label('lastname','Apellido') !!}
            {!! Form::text('lastname',null,['class' =>  'form-control','required']) !!}
        </div>
        <div class="form-group col-lg-6">
            {!! Form::label('username','Nombre de usuario') !!}
            {!! Form::text('username',null,['class' =>  'form-control','required']) !!}
        </div>
        <div class="form-group col-lg-6">
            {!! Form::label('password','Contraseña') !!}
            {!! Form::password('password',['class' =>  'form-control','required']) !!}
        </div>
        <div class="form-group col-lg-6">
            {!! Form::label('email','Correo electronico') !!}
            {!! Form::email('email',null,['class'   =>  'form-control','required']) !!}
        </div>
        <div class="form-group col-lg-3">
            {!! Form::label('dni','DNI') !!}
            {!! Form::text('dni',null,['class'   =>  'form-control','required']) !!}
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
            {!! Form::submit('Crear',['class'  =>  'btn btn-success']) !!}
            <?= link_to_route('user.index', 'Volver al listado', [], ['class' => 'btn btn-warning']); ?>
        </div>

    {!! Form::close() !!}

@endsection