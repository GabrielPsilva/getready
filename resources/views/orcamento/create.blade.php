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

@isset($orcamento)
    <div class="alert alert-success" role="alert">
        Caro(a) {{$orcamento->nome}} <br>
        O valor total do seu seguro é R$ {{$orcamento->valor_total}} <br>
        <table>
            <tr>
              <th>parcela</th>
              <th>valor</th>
            </tr>
        @for ($i = 1; $i <= 12; $i++)

        <tr>
            <td>{{$i}}</td>
            <td>R$ {{$orcamento->valor_parcela}}</td>
          </tr>

        @endfor

        </table>
          
    </div>

    <a href="{{ URL::to('orcamento/create_pdf') }}"><button type="button" class="btn btn btn-outline-danger mt-2 mb-2"> Criar PDF <i class="fas fa-download"></i></button></a>

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

        <div class="form-group">
            {{ Form::label('Celular', 'Celular:') }}
            {{ Form::select('celular_id', $celulares, null, array('class' => 'form-control ')) }}
        </div>

        <div class="form-group">
            {{ Form::label('Ano de fabricacao', 'Ano de fabricação:') }}
            {{ Form::selectRange('ano', 2010, 2022, null , ['class' => 'form-control', 'placeholder' => 'Ex: 2019']) }}
        </div>
        
        <fieldset class="form-group">
            <div class="row">
              <label class="col-form-label col-sm-2 pt-0">Opções</label>
              <div class="col-sm-10">
                <div class="form-check-inline">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                  <label class="form-check-label" for="gridRadios1">
                    Roubo
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Furto
                  </label>
                </div>
                <div class="form-check-inline disabled">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                  <label class="form-check-label" for="gridRadios3">
                    Líquido
                  </label>
                </div>
              </div>
            </div>
          </fieldset>

        <div class="form-group">
            {{ Form::label('nome', 'Nome:') }}
            {{ Form::text('nome', null , ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('mail', 'Email:') }}
            {{ Form::text('email', null , ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('cpf', 'Cpf:') }}
            {{ Form::text('cpf', null , ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('telefone', 'Telefone:') }}
            {{ Form::text('telefone', null , ['class' => 'form-control']) }}
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

