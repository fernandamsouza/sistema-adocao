@extends('layouts.app')
<head>
    <title>AdotAí - Cadastrar Animal</title>
    <script src="https://kit.fontawesome.com/9679e38ee9.js" crossorigin="anonymous"></script>
</head>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><button type="button" class="btn btn-danger"><a style="color:white" href="{{ url('home') }}"><i class="fa-solid fa-arrow-left"></i> Voltar</a></button>
            </div>
            <div class="card-header">
                <h1>Cadastre o animal</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('animais/add') }}" method="post" > 
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Idade:</label>
                                <input type="text" name="idade" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descricao:</label>
                                <input type="text" name="descricao" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3" id="preco">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Preço:</label>
                                <input type="text" name="preco" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="search-input">
                                <label for="situacao"><i class="lni lni-grid-alt theme-color"></i></label>
                                <select class="form-select" name="situacao" id="situacao2" required>
                                    <option value="none" selected disabled>Categorias</option>
                                    <option value="A">Adoção</option>
                                    <option value="V">Venda</option>
                                    <option value="P">Perdidos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="search-input">
                                <label for="tipo"><i class="lni lni-map-marker theme-color"></i></label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="none" selected disabled>Tipos</option>
                                    <option value="C">Cachorro</option>
                                    <option value="G">Gato</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="search-input">
                                <label for="porte"><i class="lni lni-map-marker theme-color"></i></label>
                                <select class="form-select" name="porte" id="porte" required>
                                    <option value="none" selected disabled>Porte</option>
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                    <option value="H">H</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="search-input">
                                <label for="tipo"><i class="lni lni-map-marker theme-color"></i></label>
                                <select class="form-select" name="castrado" id="castrado" required>
                                    <option value="none" selected disabled>Castrado</option>
                                    <option value="S">Sim</option>
                                    <option value="N">Não</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="search-input">
                                <label for="tipo"><i class="lni lni-map-marker theme-color"></i></label>
                                <select class="form-select" name="vacinas" id="vacinas" required>
                                    <option value="none" selected disabled>Vacinas</option>
                                    <option value="S">Sim</option>
                                    <option value="N">Não</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="search-input">
                                <label for="tipo"><i class="lni lni-map-marker theme-color"></i></label>
                                <select class="form-select" name="sexo" id="sexo" required>
                                    <option value="none" selected disabled>Sexo</option>
                                    <option value="M">Macho</option>
                                    <option value="F">Fêmea</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="text-align:center" >
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection
