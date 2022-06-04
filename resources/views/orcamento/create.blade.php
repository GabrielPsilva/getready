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
                            {!! session('status') !!}
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

{!! Form::open(['url' => '/orcamento/create']) !!}
<br>
{{ Form::label('Celular', 'Celular') }}
{{ Form::select('celular_id', $celulares) }}
<br>
{{ Form::selectRange('ano', 2010, 2022) }}
<br>
{{ Form::label('Nome', 'Nome') }}
{{ Form::text('nome') }}
<br>
{{ Form::label('mail', 'Email') }}
{{ Form::text('email') }}
<br>
{{ Form::label('cpf', 'Cpf') }}
{{ Form::text('cpf') }}
<br>
{{ Form::label('telefone', 'Telefone') }}
{{ Form::text('telefone') }}
<br>
{{ Form::submit('Enviar') }}

{!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>
@endsection