@extends('layouts.app')
<head>
    <script src="https://kit.fontawesome.com/9679e38ee9.js" crossorigin="anonymous"></script>
</head>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><button type="button" class="btn btn-danger"><a style="color:white" href="{{ url('home') }}"><i class="fa-solid fa-arrow-left"></i> Voltar</a></button>


            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if( Request::is('*/edit'))
                    <form action="{{ url('informacoes/editja') }}" method="post" > 
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Idade:</label>
                            <input type="text" name="idade" class="form-control" value="{{ $informacoes->idade }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Logradouro:</label>
                            <input type="text" name="logradouro" class="form-control" value="{{ $informacoes->logradouro }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone Primário:</label>
                            <input type="text" name="telefone_primario" class="form-control" value="{{ $informacoes->telefone_primario }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone Secundário:</label>
                            <input type="text" name="telefone_secundario" class="form-control" value="{{ $informacoes->telefone_secundario }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Complemento:</label>
                            <input type="text" name="complemento" class="form-control" value="{{ $informacoes->complemento }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cidade:</label>
                            <input type="text" name="cidade" class="form-control" value="{{ $informacoes->cidade }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Estado:</label>
                            <input type="text" name="estado" class="form-control" value="{{ $informacoes->estado }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">País:</label>
                            <input type="text" name="pais" class="form-control" value="{{ $informacoes->pais }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @else 
                    <form action="{{ url('informacoes/insert') }}" method="post" > 
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Idade:</label>
                            <input type="text" name="idade" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Logradouro:</label>
                            <input type="text" name="logradouro" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone Primário:</label>
                            <input type="text" name="telefone_primario" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone Secundário:</label>
                            <input type="text" name="telefone_secundario" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Complemento:</label>
                            <input type="text" name="complemento" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cidade:</label>
                            <input type="text" name="cidade" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Estado:</label>
                            <input type="text" name="estado" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">País:</label>
                            <input type="text" name="pais" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
