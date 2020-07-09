@extends('layout.principal')

@section('titulo', 'Clientes')
@section('conteudo')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Clientes</h5>
        @if (isset($clientes) && count($clientes) > 0)
        <table class="table border table-hover" id="tabelaClientes">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
            </thead>
            <tbody>
                @foreach ($clientes as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->nome }}</td>
                        <td>{{ $c->idade }}</td>
                        <td>{{ $c->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <h4>Nenhum cliente cadastrado</h4>
        @endif
    </div>
    <div class="card-footer">
        <a href="{{ route('novoCliente') }}" class="btn btn-primary">Novo</a>
    </div>
</div>

@endsection

