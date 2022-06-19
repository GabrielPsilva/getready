@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                                <th>ID</th>
                                <th>Total</th>
                                <th>Parcela</th>
                                <th>Nome</th>
                                <th>Cpf</th>
                                <th>Email</th>
                                <th>Opção 1</th>
                                <th>Opção 2</th>
                            </tr>
                        </thead>
                        <tbody>
                
                    @foreach ($orcamentos as $value)
                        <tr>
                            <td>{{ $value->celular_id }}</td>
                            <td>{{ $value->valor_total }}</td>
                            <td>{{ $value->valor_parcela }}</td>
                            <td>{{ $value->nome }}</td>
                            <td>{{ $value->cpf }}</td>
                            <td>{{ $value->email }}</td>
                            <td><a href="{{ url('orcamento/' . $value->id) }}"><button type="button" class="btn btn-primary btn-sm">Visualizar</button></a></td>
                            <td>
                                {{ Form::open(array('url' => 'orcamento/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Excluir', array('class' => 'btn btn-danger btn-sm')) }}
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

