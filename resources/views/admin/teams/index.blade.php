@extends('admin.template.main')

@section('section','Lista de equipos')

@section('content')
    <?= link_to_route('team.create', 'Crear nuevo equipo', [], ['class' => 'btn btn-primary']); ?>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Participando en</th>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <td> {{$team->id}} </td>
                <td> {{$team->name}} </td>
                <td>
                    @if(is_null($team->tournament))
                        <span class="label label-danger">Ninguno</span>
                    @else
                        {{ $team->tournament->name  }}
                    @endif
                </td>
                <td>
                    {!! link_to_route('team.edit','',[$team->id],['class' =>  'btn btn-warning glyphicon glyphicon-pencil']) !!}
                    <?= Form::open(['route' => ['team.delete', $team->id], 'method' => "delete" , 'class'   =>  'btn-delete']);?>
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                    <?= Form::close();?>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $teams->render()  !!}
    </div>
@endsection