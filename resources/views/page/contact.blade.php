<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Get Ready - Contato</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{ URL::to('page/index') }}">
            <span>
              Get Ready
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="{{ URL::to('home') }}">LOGIN</a>
                <a href="{{ URL::to('page/contact') }}">CONTATO</a>
                <a href="{{ URL::to('page/about') }}">SOBRE N??S</a>
                <a href="{{ URL::to('page/advices') }}">DICAS</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- feature section -->
  <section class="feature_section layout_padding2 layout_margin">
    <div class="container">
      <div class="heading_container">
        <h2>
          Fale com a gente <br />
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="head-box">
              <div class="img-box">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                  <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                </svg>

              </div>
              <h6>
                Chat
              </h6>
            </div>
            <div class="detail-box">
              <p>
                Para d??vidas, solicita????es ou problemas ?? s?? mandar um oi!
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="head-box">
              <div class="img-box">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                </svg>

              </div>
              <h6>
                SAC <br />
                0800 000 0000
              </h6>
            </div>
            <div class="detail-box">
              <p>
              Estamos sempre prontos para te ajudar com reclama????es e cancelamento de contratos, 
              24h por dia, 7 dias por semana. ????
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="head-box">
              <div class="img-box">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                </svg>

              </div>
              <h6>
                OUVIDORIA <br />
                0800 000 0000
              </h6>
            </div>
            <div class="detail-box">
              <p>
              O problema n??o foi resolvido em outros canais? N??o se preocupe! 
              ?? s?? ligar para a Ouvidoria: segunda a sexta, das 8h ??s 18h.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end feature section -->


  <!-- info section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        Get Ready
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Quem somos
          </h5>
          <p>
            A Get ready ?? mais que uma seguradora, somos a solu????o para melhorar e facilitar as experi??ncias do cliente.
          </p>
        </div>
        <div class="col-md-3">
          <h5>
            Refer??ncias
          </h5>
          <ul>
            <li>
              <a href="https://laravel.com">
                Laravel
              </a>
            </li>
            <li>
              <a href="https://getbootstrap.com">
                Bootstrap
              </a>
            </li>
            <li>
              <a href="https://adminlte.io/docs/3.0/layout.html">
                AdminLTE
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Fale conosco
          </h5>
          <p>
            A seguradora Get ready pode tirar todas as suas d??vidas.
          </p>
        </div>
        <div class="col-md-3">

          <div class="subscribe_container">
            <h5>
              Receba novidades
            </h5>
            <div class="form_container">
              <form action="">
                <input type="email" placeholder="Seu email">
                <button type="submit">
                  Inscreva-se
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="social_container">

        <div class="social-box">
          <a href="">
            <img src="{{ URL::asset('assets/images/fb.png') }}" alt="">
          </a>

          <a href="">
            <img src="{{ URL::asset('assets/images/twitter.png') }}" alt="">
          </a>
          <a href="">
            <img src="{{ URL::asset('assets/images/linkedin.png') }}" alt="">
          </a>
          <a href="">
            <img src="{{ URL::asset('assets/images/instagram.png') }}" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2022 todos os direitos reservados. Design por
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>