@extends('adminlte::page')

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

                    <div class="container col-8">
                        <p>Id:       {{ $orcamento->id         }}</p>
                        <p>Nome:     {{ $orcamento->nome       }}</p>
                        <p>Email:    {{ $orcamento->email      }}</p>
                        <p>Cpf:      {{ $orcamento->cpf        }}</p>
                        <p>Telefone: {{ $orcamento->telefone   }}</p>
                        <p>Ano:      {{ $orcamento->ano        }}</p>
                    </div>
                <a class="btn btn-primary " href="{{URL::to('orcamento/')}}">Voltar</a>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>

@endsection

