
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>AdotAí - Conectando Animais e Pessoas</title>
    <link rel="shortcut icon" sizes="114x114" href="{{ URL::asset('/images/dogau.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animated.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.css') }}">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="{{ URL::asset('/images/logo3.png') }}" alt="AdotAí">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Serviços</a></li>
              <li class="scroll-to-section"><a href="#clients">Depoimentos</a></li>
              <li class="scroll-to-section"><a href="#pricing">Preços</a></li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('register'))
                        <li class="scroll-to-section">
                            <a id="modal_trigger" href="{{ route('register') }}"><i class="fa fa-sign-in-alt"></i> {{ __('Registrar') }}</a>
                        </li>
                    @endif

                    @if (Route::has('login'))
                        <li class="scroll-to-section">
                            <div class="gradient-button"><a id="modal_trigger" href="{{ route('login') }}"><i class="fa fa-sign-in-alt" ></i> {{ __('Login') }}</a></div>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Plataforma para conexão de animais e pessoas</h2>
                    <p>Adoção ou venda de animais bem como divulgação de animais perdidos.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ URL::asset('/images/a.png') }}" alt="">
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Conectando <em>Animais &amp; Pessoas</em> de forma simplificada</h4>
            <img src="{{ URL::asset('/images/heading-line-dec.png') }}" alt="">
            <p> Para mais informações sobre a plataforma vá para <a href="https://templatemo.com/contact" target="_parent">nossa página de contato</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Adote seu animal</h4>
            <p>A partir de uma lista e animais do Brasil todo, encontre um animalzinho para chamar de seu.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Compre seu animal dos sonhos</h4>
            <p>Com uma série de raças de diversos animais, conectamos pessoas e seu futuro bixinho!</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Divulgação de animais perdidos</h4>
            <p>Ajude a encontrar um animal perdido ou divulge seu pet perdido.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Confira o que  <em>os clientes dizem</em> sobre a nossa plataforma</h4>
            <img src="{{ URL::asset('/images/heading-line-dec.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Fernanda Maria de Souza</h4>
                            <span class="date">30 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Adoção de cachorros</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.8</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Nikolas Jensen</h4>
                            <span class="date">29 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Venda de gatos</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.5</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Toby Albuquerque</h4>
                            <span class="date">27 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Animais perdidos</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.7</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Random User</h4>
                            <span class="date">24 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Venda de animais</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">3.9</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Lucas Vianna</h4>
                            <span class="date">21 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Venda de cavalo</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.3</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="{{ URL::asset('/images/quote.png') }}" alt="">
                                <p>“Essa plataforma é sensacional! Vários participantes de nossa ONG divulgam vários animalzinhos aqui e os mesmos rapidamente são achados. A rede possibilita uma centralização na comunicação desses casos, era tudo que faltava para nossas vidas.”</p>
                              </div>
                              <div class="down-content">
                                <img src="{{ URL::asset('/images/client-image.jpg') }}" alt="">
                                <div class="right-content">
                                  <h4>David Martino</h4>
                                  <span>CEO of AnimaisPerdidos.com</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Nos temos os melhores <em>Preços</em> Para você avalancar suas adoções e vendas </h4>
            <img src="{{ URL::asset('/images/heading-line-dec.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pricing-item-regular">
            <span class="price">$12</span>
            <h4>Plano Standard</h4>
            <div class="icon">
                <img src="{{ URL::asset('/images/pricing-table-01.png') }}" alt="">
            </div>
            <ul>
              <li>Destaque nas listagens</li>
              <li>E-mail marketing</li>
              <li class="non-function">Suporte 24h</li>
              <li class="non-function">Estrela premium</li>
            </ul>
            <div class="border-button">
              <a href="#">Garante esse plano agora!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pricing-item-pro">
            <span class="price">$25</span>
            <h4>Plano Business</h4>
            <div class="icon">
              <img src="{{ URL::asset('/images/pricing-table-01.png') }}" alt="">
            </div>
            <ul>
            <li>Destaque nas listagens</li>
            <li>E-mail marketing</li>
            <li>Suporte 24h</li>
            <li>Estrela premium</li>
            </ul>
            <div class="border-button">
              <a href="#">Garante esse plano agora!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Entre em nossa lista de e-mails para garantir as &amp; últimas notícias</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button">Se inscreva agora <i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>Contate a gente</h4>
            <p>Florianópolis - SC, 88070-810, Brazil</p>
            <p><a href="#">fernandamsouza833@gmail.com</a></p>
            <p><a href="#">nikolas.jensen@gmail.com</a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>Sobre nós</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Serviços</a></li>
              <li><a href="#">Avaliações</a></li>
              <li><a href="#">Preço</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>Sobre a plataforma</h4>
            <div class="logo">
              <img src="{{ URL::asset('/images/logo3.png') }}" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 AdotAí. All Rights Reserved. 
          <br><a href="https://templatemo.com/" target="_blank" title="css templates"></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src=" {{ URL::asset('jquery/jquery.min.js') }}"></script>
  <script src=" {{ URL::asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('js/owl-carousel.js') }}"></script>
  <script src="{{ URL::asset('js/animation.js') }}"></script>
  <script src="{{ URL::asset('js/imagesloaded.js') }}"></script>
  <script src="{{ URL::asset('js/popup.js') }}"></script>
  <script src="{{ URL::asset('js/custom.js') }}"></script>
</body>
</html>