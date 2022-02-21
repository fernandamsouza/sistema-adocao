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
                <div class='row'>
                    <button class="btn btn-primary" ><a href="informacoes/formulario" style="color:white">Criar nova informação pessoal</a></button>
                </div>
                <br>
                <div class='row'>
                    <button class="btn btn-primary" ><a href="informacoes/formulario/edit" style="color:white">Editar informação pessoal</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection