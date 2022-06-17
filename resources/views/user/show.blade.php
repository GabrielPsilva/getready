@extends('adminlte::page')

@section('title', 'Get Ready - Usuários')


@section('content')

<h1 style="text-align: center;">Bem-Vindo {{ $user->name }}</h1>

<div class="container col-8">
    <div class="card">

    <div class="card-body">
	<p scope="row">ID:                  {{ $user->id }}</p>
    <p scope="row">Nome:                {{ $user->name }}</p>
    <p scope="row">Email:               {{ $user->email }}</p>

    
    <p scope="row">Criação:             {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }}</p>
    <p scope="row">Última modificação:  {{ Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i') }}</p>

    <a class="btn btn-primary" href="{{URL::to('user')}}">Voltar</a>
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
