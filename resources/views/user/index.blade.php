@extends('adminlte::page')

@section('title', 'Administração de Usuários')

@section('content_header')
    <h1 style="text-align: center">Usuários</h1>
@stop


@section('content')
<div class="container col-8">
    <div class="card" style="margin-bottom: 25px;">
    <div class="card-body">
    <a class="btn btn-success btn-sm float-right" href="{{ URL::to('user/create') }}">Novo Usuário</a>
        <table class="table  no-margin">
        <thead>
            <tr>
                <td>ID</td>
                <td>Email</td>
                <td>nome</td>
                <td>ações</td>
            </tr>
        </thead>      
        <tbody>
                <tr>
                    @foreach ($user as $key => $value )
                    <tr>
                        <td> {{$value->id}}</td>
                        <td> {{$value->email}}</td>
                        <td> {{$value->name}}</td>
                        
                        <td><a class="btn btn-primary" href="{{ URL::to('user/' . $value->id) }}">visualizar</a></td>
                        <td><a class="btn btn-warning" href="{{ URL::to('user/' . $value->id . '/edit') }}">editar</a></td>
                    <!-- <a class="btn btn-danger" href="#"> deletar</a> -->
                    <td>
                    {{ Form::open(array('url' => 'user/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                    </td>
                
                    </tr>
                    @endforeach
                </tr>
        </tbody>
        </table>
    </div> 
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop