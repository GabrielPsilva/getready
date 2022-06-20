@extends('adminlte::page')

@section('title', 'Get ready - Criar novo usuário')

@section('content_header')
    <h1 style="text-align: center">Usuários</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Solicitações') }}</div>

                <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{ Form::open(array('url' => '/user/create')) }}


            <div class="row">
                <div class="col-6">
                    {{ Form::label('name', 'Nome:') }}
                    {{ Form::text('name', null , ['class' => 'form-control'] )}}
                </div>
                <div class="col-6">
                    {{ Form::label('email', 'E-mail:') }}
                    {{ Form::text('email', null , ['class' => 'form-control'] ) }}
                </div>
                <div class="col-6">
                    {{ Form::label('perfil', 'Perfil:' , ['class' => 'form-select ']) }} 
                    {{ Form::select('perfil', ['1' => 'Administrador', '0' => 'Usuário padrão'],null, array('class' => 'form-control ')) }} 
                </div>
                <div class="col-6">
                    {{ Form::label('password', 'Senha:') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>
                <div class="col-6">
                    {{ Form::label('password', 'Confirmar senha:') }}
                    {{ Form::password('confirm-password', array('class' => 'form-control ')) }}
                </div>
            </div>
            
                    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
                    <a class="btn btn-primary" href="{{URL::to('user/')}}">Voltar</a>
        
        
            {{ Form::close()  }}


</div>
</div>
</div>
</div>
</div>
</div>

@endsection

