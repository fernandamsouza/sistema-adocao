@extends('layouts.app')
<script src="https://kit.fontawesome.com/9679e38ee9.js" crossorigin="anonymous"></script>
@section('content')
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/list.scss') }}">
</head>

<style>
#vamos {
  scroll-behavior: smooth;
}

</style>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><a href="{{ url('home') }}">
                    Voltar
            </a></div>
            <div class="card-body">
                @foreach($animais as $a)
                    {{print_r($a)}}
                    {{($a->name)}}
                    <br>
                @endforeach   
            </div>
        </div>
    </div>
</div> -->
<div class="vamos">
    <div class="center">
        <div class="row">
@foreach($animais as $a)
            <div class="col-4 card">
                <div class="additional">
                <div class="user-card">
                    <div class="level center">
                    Anúncio comum
                    </div>
                    <!-- <div class="points center">
                    5,312 Points
                    </div> -->
                    <img src="{{ $a->foto }}" id="resize" alt="" />    

                    @if ($a->id_usuario == $a->usu_atual)
                    <form method="get" action="/animais/excluir/{{ $a->id }}">
                        <button id="botaoExcluir" class="btn-secondary" type="submit"><i class="fa-solid fa-trash-can"></i> Excluir</button>
                    </form>
                    @endif
                    <!-- <div class="center" style="text-align:center">
                        @if (array_key_exists("telefone", $a)) {{ $a->telefone}}  @endif
                    </div> -->
                    @if (array_key_exists("telefone", $a))
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=55{{ $a->telefone }}">
                        <button id="botaoApi" class="btn-success"><i class="fa-brands fa-whatsapp"></i> Contato</button>
                    </a>
                    @endif
                </div>
                <div class="more-info">
                    <h1>{{ $a->name}}</h1>
                    <div class="coords">
                    <span>{{ $a->idade }} anos</span>
                    <span>Data de cadastro: {{ $a->created_at }}</span>
                    </div>
                    <div class="coords">
                        <span>@if (array_key_exists("cidade", $a)) {{ $a->cidade }} @endif, @if (array_key_exists("estado", $a)) {{ $a->estado }} @endif, @if (array_key_exists("pais", $a)) {{ $a->pais }} @endif</span>
                    </div>
                    <div class="stats">
                        <div>
                            <div class="title">Castrado</div>
                            <!-- <i class="fa fa-trophy"></i> -->
                            @if ($a->castrado == 'S')
                                <div class="value">S</div>
                            @else
                                <div class="value">N</div>
                            @endif
                        </div>
                        <div>
                            <div class="title">Vacinas</div>
                            <!-- <i class="fa fa-gamepad"></i> -->
                                @if ($a->vacinas == 'S')
                                    <div class="value">S</div>
                                @else
                                    <div class="value">N</div>
                                @endif
                        </div>
                        <div>
                            <div class="title">Sexo</div>
                            <!-- <i class="fa fa-group"></i> -->
                            @if ( $a->sexo == 'M')
                                <div class="value">Macho</div>
                                @else
                                <div class="value">Fêmea</div>
                            @endif
                        </div>
                        <div>
                            <div class="title">Porte</div>
                            <!-- <i class="fa fa-coffee"></i> -->
                            @if ( $a->id_porte == 1)
                                <div class="value">P</div>
                            @elseif ( $a->id_porte == 2)
                                <div class="value">P</div>
                            @elseif ( $a->id_porte == 3)
                                <div class="value">M</div>
                            @elseif ( $a->id_porte == 4)
                                <div class="value">G</div>
                            @elseif ( $a->id_porte == 5)
                                <div class="value">GG</div>
                            @endif
                        </div>
                    </div>
                </div>
                </div>
                <div class="general">
                    <h1>{{ $a->name }}</h1>
                    <p>{{ $a->descricao }}</p>
                    <!-- <span class="more">Passe o mouse para mais informações.</span> -->
                    <div class="row">
                        @if ($a->id_situacao == 1)
                            <h5><i class="fa-solid fa-hand-holding-dollar"></i> Preço: {{ $a->preco }}</h5>
                        @elseif ($a->id_situacao == 2)
                            <h5><i class="fa-solid fa-hand-holding-dollar"></i> Preço: {{ $a->preco }}</h5>
                        @elseif ($a->id_situacao == 3)
                            <h5><i class="fa-solid fa-hand-holding-dollar"></i> Recompensa: {{ $a->preco }}</h5>
                        @endif
                    </div>
                    @if ($a->id_tipo == 1)
                        <h5><i class="fa-solid fa-dog"></i> Cachorro</h5>
                    @elseif ($a->id_tipo == 2)
                        <h5><i class="fa-solid fa-cat"></i> Gato</h5>
                    @endif
                    <div class="row" style="text-align:center">
                        @if ($a->id_situacao == 1)
                        <div class="col-4">
                            <span class='badge bg-warning'>Adoção</span>
                        </div>
                        @elseif ($a->id_situacao == 2)
                        <div class="col-4">
                            <span class='badge bg-primary'>Venda</span>
                        </div>
                        @elseif ($a->id_situacao == 3)
                        <div class="col-4">
                            <span class='badge bg-danger'>Perdido</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
@endforeach  
        </div>
    </div>
</div>
@endsection
