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

<h2>Celular</h2>
<p><b>Nome:</b>      {{ $celular->nome              }} </p>
<p><b>Valor:</b>     {{ $celular->valor             }} </p>
<p><b>Criação:</b>   {{ $celular->created_at        }} </p>


</div>
</div>
</div>
</div>
</div>
@endsection

