@extends('adminlte::page')

@section('title', 'Get Ready - Orçamento')

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
                        <h2>Orçamento</h2>
                        <p>Dispositivo:       {{ $orcamento->celular->nome}}</p>
                        <p>Usuário:           {{ $orcamento->nome         }}</p>
                        <p>Email:             {{ $orcamento->email        }}</p>
                        <p>Cpf:               {{ $orcamento->cpf          }}</p>
                        <p>Telefone:          {{ $orcamento->telefone     }}</p>
                        <p>Ano:               {{ $orcamento->ano          }}</p>
                        <p>Valor total:       {{ $orcamento->valor_total  }}</p>
                        <p>Valor das parcela: {{ $orcamento->valor_parcela}}</p>

                    </div>
                <a class="btn btn-primary " href="{{URL::to('orcamento/')}}">Voltar</a>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>

@endsection

