@extends('layout.principal')

@section('titulo', 'Clientes')
@section('conteudo')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Clientes</h5>
    </div>
    <div class="card-footer">
        <a href="{{ route('novoCliente') }}" class="btn btn-primary">Novo</a>
    </div>
</div>

@endsection

