@extends('adminlte::page')

@section('title', 'Get ready - Perfil')

@section('content_header')
    <h1 style="text-align: center;">Bem-Vindo {{ $user->name }}</h1>
@stop

@section('content')



<div class="container"> 
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card card-primary card-outline">

<div class="card-body">

	<p scope="row">ID:                   {{ $user->id }}</p>
    <p scope="row">Nome:                 {{ $user->name }}</p>
    <p scope="row">E-mail:               {{ $user->email }}</p>

    
    <p scope="row">Criação:             {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }}</p>
    <p scope="row">Última modificação:  {{ Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i') }}</p>
    
</div>

</div>
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