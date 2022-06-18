@extends('adminlte::page')

@section('title', 'Get ready - Alterar senha')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif

                    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

                <div class="title m-b-md">
                    <div class="alert alert-primary" role="alert">

                        <h4>ALTERAR SENHA DE:</h4>  
                        
                        <div class="alert alert-warning" style="text-align:center;display:inline-block"> 
                            <h5 style="font-weight:bold;"> {{ $user->name }} </h5>
                        </div>

                    </div>
                </div>

                
                <br>
                <br>
                {{ Form::model($user, array('route' => array('selfUpdatePassword'), 'method' => 'PUT')) }}
                
                <div class="form-group">
                    {{ Form::label('password_old', 'Senha antiga: ') }}
                    {{ Form::password('password_old', ['class' => 'form-control']) }}
                </div>
                

                <div class="form-group">
                    {{ Form::label('password_new', 'Senha nova: ') }}
                    {{ Form::password('password_new', ['class' => 'form-control']) }}
                </div>
                

                <div class="form-group">
                    {{ Form::label('password_new2', 'Confirmação da senha nova: ') }}
                    {{ Form::password('password_new2', ['class' => 'form-control']) }}
                </div>
                

                {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
                <a class="btn btn-primary " href="{{URL::to('/home')}}">Cancelar</a>
                
                {{ Form::close() }}


            
            </div>


            </div>
        </div>
    </div>
</div>
@endsection 

