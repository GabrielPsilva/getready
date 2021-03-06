@extends('adminlte::page')

@section('title', 'Get ready - Modelos')

@section('content_header')
    <h1 style="text-align: center">Modelos</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    <a href="{{ URL::to('celular/create') }}"><button type="button" class="btn btn-success btn-sm float-right">Adicionar novo modelo</button></a>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                <script>
                    function ConfirmDelete() {
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>
                
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>nome</th>
                                <th>valor</th>
                                <th></th>
                                <th>Ações</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                
                    @foreach ($celulares as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->nome }}</td>
                            <td>{{ $value->valor }}</td>
                            <td><a href="{{ url('celular/' . $value->id) }}"><button type="button" class="btn btn-block btn-primary btn-sm">Visualizar</button></a></td>
                            <td><a href="{{ url('celular/' . $value->id . '/edit') }}"><button type="button" class="btn btn-block btn-warning btn-sm">Editar</button></a></td>
                            <td>
                                {{ Form::open(array('url' => 'celular/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
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

