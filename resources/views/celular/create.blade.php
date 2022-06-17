@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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

{!! Form::open(['url' => '/celular/create']) !!}

<br>
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome') }}
<br>
{{ Form::label('valor', 'Valor') }}
{{ Form::text('valor') }}
<br>
{{ Form::label('data de fabricacao', 'Data de fabricação') }}
{{ Form::text('valor') }}
<br>
{{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
<a class="btn btn-primary " href="{{URL::to('celular/')}}">Cancelar</a>

{!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>
@endsection