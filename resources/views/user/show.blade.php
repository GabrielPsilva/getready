@extends('adminlte::page')

@section('title', 'Get Ready - Usuário')

@section('content_header')
    <h1 style="text-align: center"></h1>
@stop

@section('content')

<div class="container col-8">
<div class="card">
    <div class="card-header">{{ __('Painel') }}</div>

    <div class="card-body">
        <div class="container col-10">

	<p scope="row">ID:                  {{ $user->id }}</p>
    <p scope="row">Nome:                {{ $user->name }}</p>
    <p scope="row">Email:               {{ $user->email }}</p>

    
    <p scope="row">Criação:             {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }}</p>
    <p scope="row">Última modificação:  {{ Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i') }}</p>

        </div>
            <a class="btn btn-primary" href="{{URL::to('user/')}}">Voltar</a>
    </div>

</div>
</div>

@endsection

