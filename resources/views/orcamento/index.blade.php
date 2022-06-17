@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Solicitações') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <script>
                    function ConfirmDelete() {
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>
                
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Cpf</th>
                                <th>Telefone</th>
                                <th>Ano</th>
                            </tr>
                        </thead>
                        <tbody>
                
                    @foreach ($orcamentos as $value)
                        <tr>
                            <td>{{ $value->celular_id }}</td>
                            <td>{{ $value->nome }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->cpf }}</td>
                            <td>{{ $value->telefone }}</td>
                            <td>{{ $value->ano }}</td>
                            <td><a href="{{ url('orcamento/' . $value->celular_id) }}"><button type="button" class="btn btn-block btn-primary btn-sm">Visualizar</button></a></td>
                            <td>
                                {{ Form::open(array('url' => 'orcamento/' . $value->celular_id, 'onsubmit' => 'return ConfirmDelete()')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                                {{ Form::close() }}
                            </td>
                        </tr>

                    @endforeach
                
                        </tbody>
                    </table>
                    {{-- $celulares->links() --}}                 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
