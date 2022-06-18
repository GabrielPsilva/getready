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

  <title>Get Ready</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnassets/js.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

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
                <a href="{{ URL::to('page/about') }}">SOBRE NÓS</a>
                <a href="contact.html">DÚVIDAS</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container d-flex justify-content-lg-start">
        <h2>
          Quem Somos:
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box b-1">
              <p>
                Nossa missão é assumir riscos e prestar serviços, por meio de um atendimento familiar que supere expectativas, garantindo agilidade a custos competitivos com responsabilidade social e ambiental.
              </p>
              <a href="{{ URL::to('page/index') }}">
                Voltar
              </a>
            </div>
          </div>
          <div class="col-md-5">
            <div class="detail-box b-2">
              <p>
                Conheça os valores e ideais que nos movem, todos os dias, para oferecer a você produtos e serviços que proporcionem mais tranquilidade, segurança e conveniência.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


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
            A Get ready é mais que uma seguradora, somos a solução para melhorar e facilitar as experiências do cliente.
          </p>
        </div>
        <div class="col-md-3">
          <h5>
            Referências
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
            A seguradora Get ready pode tirar todas as suas dúvidas.
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