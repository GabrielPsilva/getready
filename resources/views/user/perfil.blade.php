@extends('adminlte::page')

@section('title', 'Get ready - Perfil')

@section('content_header')
    <h1 style="text-align: center;">Bem-Vindo {{ $user->name }}</h1>
@stop

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel') }}</div>

                <div class="card-body">

	<p scope="row">ID:                   {{ $user->id }}</p>
    <p scope="row">Nome:                 {{ $user->name }}</p>
    <p scope="row">E-mail:               {{ $user->email }}</p>

    
    <p scope="row">Criação:             {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }}</p>
    <p scope="row">Última modificação:  {{ Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i') }}</p>
    

    <a class="btn btn-primary " href="{{URL::to('home')}}">Voltar</a>


</div>
</div>
</div>
</div>
</div>

@stop

