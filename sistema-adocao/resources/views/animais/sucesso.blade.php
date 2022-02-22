@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><button type="button" class="btn btn-danger"><a style="color:white" href="{{ url('home') }}"><i class="fa-solid fa-arrow-left"></i> Voltar</a></button>
            </div>
            <br>
            <button id="botaoExcluir" class="btn-secondary" type="button"><i class="fa-solid fa-trash-can"></i> Operação realizada com sucesso!</button>
            </div>
        </div>
    </div>
</div>

@endsection