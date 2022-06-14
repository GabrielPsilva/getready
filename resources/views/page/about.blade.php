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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
          <div class="col-md-5">
            <div class="detail-box b-2">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
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
            About Us
          </h5>
          <p>
            dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r
          </p>
        </div>
        <div class="col-md-3">
          <h5>
            Useful Link
          </h5>
          <ul>
            <li>
              <a href="">
                Video games
              </a>
            </li>
            <li>
              <a href="">
                Remote control
              </a>
            </li>
            <li>
              <a href="">
                3d controller
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Contact Us
          </h5>
          <p>
            dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e
          </p>
        </div>
        <div class="col-md-3">

          <div class="subscribe_container">
            <h5>
              Newsletter
            </h5>
            <div class="form_container">
              <form action="">
                <input type="email" placeholder="Enter your email">
                <button type="submit">
                  Subscribe
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
            <img src="assets/images/fb.png" alt="">
          </a>

          <a href="">
            <img src="assets/images/twitter.png" alt="">
          </a>
          <a href="">
            <img src="assets/images/linkedin.png" alt="">
          </a>
          <a href="">
            <img src="assets/images/instagram.png" alt="">
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

  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.assets/js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.assets/js"></script>

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