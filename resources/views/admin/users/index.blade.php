@extends('admin.template.main')

@section('section','Lista de usuarios')

@section('content')
    <?= link_to_route('user.create', 'Registrar nuevo usuario', [], ['class' => 'btn btn-primary']); ?>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Nombre de usuario</th>
            <th>Tipo</th>
            <th>Promedio</th>
            <th>Equipo</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td> {{$user->id}} </td>
                    <td> {{$user->name . ' ' . $user->lastname}} </td>
                    <td> {{$user->email}} </td>
                    <td> {{$user->username}} </td>
                    <td> {{$user->type}} </td>
                    <td> {{$user->average}} </td>
                    <td>
                        @if($user->type == 'player')
                            {{$user->team->name}}
                        @else
                            Sin equipo
                        @endif
                    </td>
                    <td>
                        <?= Form::open(['route' => ['user.index', $user->id], 'method' => "delete"]);?>
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                        <?= Form::close();?>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $users->render()  !!}
    </div>
@endsection