@extends('layouts.app')

@section('content')
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AdotAí</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
    <!-- Start Hero Area -->
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <form action="{{ url('animais') }}" method="post"> 
                @csrf
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="hero-text text-center">
                            <!-- Start Hero Text -->
                            <div class="section-heading">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Bem vindo ao AdotAí!</h2>
                                <p class="wow fadeInUp" data-wow-delay=".5s">Conectando animais e pessoas.</p>
                            </div>
                            <!-- End Search Form -->
                            <!-- Start Search Form -->
                            <div class="search-form wow fadeInUp" data-wow-delay=".7s">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12 p-0">
                                        <div class="search-input">
                                            <label for="situacao"><i class="lni lni-grid-alt theme-color"></i></label>
                                            <select name="situacao" id="situacao">
                                                <option value="none" selected disabled>Categorias</option>
                                                <option value="A">Adoção</option>
                                                <option value="V">Venda</option>
                                                <option value="P">Perdidos</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-12 p-0">
                                        <div class="search-input">
                                            <label for="tipo"><i class="lni lni-map-marker theme-color"></i></label>
                                            <select name="tipo" id="tipo">
                                                <option value="none" selected disabled>Tipos</option>
                                                <option value="C">Cachorro</option>
                                                <option value="G">Gato</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-12 p-0">
                                        <div class="search-btn button">
                                            <button class="btn"><i class="lni lni-search-alt"></i> Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Search Form -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- ========================= JS here ========================= -->

</body>

@endsection
