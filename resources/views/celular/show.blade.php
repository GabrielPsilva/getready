@extends('adminlte::page')

@section('title', 'Get Ready - Celular')

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

                <div class="container col-10">
                    <h2>Celular</h2>
                    <p><b>Nome:</b>       {{ $celular->nome              }} </p>
                    <p><b>Valor:</b>      {{ $celular->valor             }} </p>
                    <p><b>Criação:</b>    {{ $celular->created_at        }} </p>
                    <p><b>Atualizado:</b> {{ $celular->updated_at        }} </p>
                </div>

                <a class="btn btn-primary " href="{{URL::to('celular/')}}">Voltar</a>

</div>
</div>
</div>
</div>
</div>
@endsection

