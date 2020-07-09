@extends('layout.principal')

@section('titulo', 'Novo Clientes')
@section('conteudo')

<main role="main">
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="title">Cadastro de Clientes</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('insertCliente') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>

                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="number" name="idade" class="form-control" placeholder="Idade">
                        </div>

                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereco">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                        <a href="{{ route('clientes') }}" class="btn btn-danger btn-sm">Voltar</a>
                    </form>
                </div>
                @if ($errors->any())
                    <div class="card-footer">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>

@endsection

