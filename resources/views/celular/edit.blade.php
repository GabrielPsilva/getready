@extends('adminlte::page')

@section('title', 'Get Ready - Editar dados')

@section('content_header')
    <h1 style="text-align: center"></h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
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

                    {{ Form::model($celular, array('route' => array('celular.update', $celular->id), 'method' => 'PUT')) }}

                    <div class="form-group">
                    {{ Form::label('nome', 'Nome') }}
                    {{ Form::text('nome', $celular->nome, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                    {{ Form::label('valor', 'Valor') }}
                    {{ Form::text('valor', $celular->valor, ['class' => 'form-control']) }}
                    </div>

                    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
                    <a class="btn btn-primary " href="{{URL::to('celular/')}}">Cancelar</a>

                    {!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>
@endsection