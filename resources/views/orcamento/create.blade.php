@extends('adminlte::page')

@section('content_header')
    <h1 style="text-align: center">Seguro celular</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">{{ __('Solicite um plano') }}

                    <div class="card-tools">
                        <span class="badge badge-light">Formulário</span>
                    </div>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {!! session('status') !!}
                        </div>
                    @endif

@isset($mensagem)
    <div class="alert alert-success" role="alert">
        {!! $mensagem !!}
    </div>

    <a href="{{ URL::to('orcamento/create_pdf') }}"><button type="button" class="btn btn btn-outline-danger mt-2 mb-2"> Criar PDF <i class="fas fa-download"></i></button></a>

    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
@endisset

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <br>
    <br>
    {!! Form::open(['url' => '/orcamento/create']) !!}

        <div class="form-group row">
            <div class="col-sm-2">
            {{ Form::label('Celular', 'Celular:') }}
            </div>
            <div class="col-sm-10">
            {{ Form::select('celular_id', $celulares) }}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
            {{ Form::label('Ano de fabricacao', 'Ano de fabricação:') }}
            </div>
            <div class="col-sm-10">
            {{ Form::selectRange('ano', 2010, 2022) }}
            </div>
        </div>

        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Opções</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                  <label class="form-check-label" for="gridRadios1">
                    Roubo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Furto
                  </label>
                </div>
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                  <label class="form-check-label" for="gridRadios3">
                    Líquido
                  </label>
                </div>
              </div>
            </div>
          </fieldset>

        <div class="form-group row">
            <div class="col-sm-2">
            {{ Form::label('nome', 'Nome:') }}
            </div>
            <div class="col-sm-10">
            {{ Form::text('nome') }}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
            {{ Form::label('mail', 'Email:') }}
            </div>
            <div class="col-sm-10">
            {{ Form::text('email') }}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
            {{ Form::label('cpf', 'Cpf:') }}
            </div>
            <div class="col-sm-10">
            {{ Form::text('cpf') }}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
            {{ Form::label('telefone', 'Telefone:') }}
            </div>
            <div class="col-sm-10">
            {{ Form::text('telefone') }}
            </div>
        </div>
    
    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2 ']) }}
    <a class="btn btn-primary " href="{{URL::to('orcamento/create/')}}">Cancelar</a>

    {!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>

@endsection

