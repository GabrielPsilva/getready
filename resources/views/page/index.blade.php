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

  <title>Get Ready - Bem vindo!</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
  <!-- responsive style -->
  <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{ URL::to('home') }}">
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
                <a href="{{ URL::to('page/advices') }}">DICAS</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
                Seguro celular
              </h2>
              <h1>
                  Proteger, <br />
                    Preservar
              </h1>
              <div>
                <a href="{{ URL::to('page/about') }}">
                  Saiba Mais
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="{{ URL::asset('assets/images/tela 1 (1).PNG') }}" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="{{ URL::asset('assets/images/tela 1 (1).PNG') }}" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="{{ URL::asset('assets/images/tela 1 (1).PNG') }}" alt="" />
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Próximo</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- feature section -->
  <section class="feature_section layout_padding2 layout_margin">
    <div class="container">
      <div class="heading_container">
        <h2>
          A cobertura que <br />
          seu aparelho precisa!
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="head-box">
              <div class="img-box">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                  <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                  <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                </svg>

              </div>
              <h6>
                Velocidade de serviço
              </h6>
            </div>
            <div class="detail-box">
              <p>
                A contratação é 100% online e, em poucos passos,
                você conta com uma cobertura completa.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="head-box">
              <div class="img-box">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                  <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                </svg>

              </div>
              <h6>
                Minimalista e prático
              </h6>
            </div>
            <div class="detail-box">
              <p>
                É simples, é fácil, é a Get!
                Não existe segredo na hora de contratar ou utilizar a proteção Get!
                fale conosco e tire suas principais dúvidas em instantes.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="head-box">
              <div class="img-box">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
                </svg>

              </div>
              <h6>
              Solução de problemas
              </h6>
            </div>
            <div class="detail-box">
              <p>
                Você tem medo de que algum imprevisto aconteça com o seu aparelho?
                Com o Seguro Celular Get ready, você fica tranquilo e não corre o risco de ficar sem ele.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end feature section -->

  <!-- download section -->

  <section class="download_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          O que é e como funciona o Seguro Celular Get ready?
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <div class="head-box">
                <div class="img-box">
                  <img src="{{ URL::asset('assets/images/cloud-download.png') }}" alt="" />
                </div>
                <h6>
                  Documento PDF
                </h6>
              </div>
              <div class="detail-box">
                <p>
                  Após efetuar o cadastramento do aparelho, a Get ready fornece uma cópia em PDF para o cliente com todos os dados bem detalhados e organizados! 
                </p>
              </div>
            </div>
            <div class="box">
              <div class="head-box">
                <div class="img-box">
                  <img src="{{ URL::asset('assets/images/trophy_.png') }}" alt="" />
                </div>
                <h6>
                  Campeã em facilidade
                </h6>
              </div>
              <div class="detail-box">
                <p>
                  A verificação do celular pode ser feita em qualquer lugar de forma rápida e segura, deixando assim, nosso comprometimento bem visível e claro.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="main-img-box">
              <img src="{{ URL::asset('assets/images/tela 2 teste.PNG') }}" alt="" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="head-box">
                <div class="img-box">
                  <img src="{{ URL::asset('assets/images/playstore.png') }}" alt="" />
                </div>
                <h6>
                  Conecte-se
                </h6>
              </div>
              <div class="detail-box">
                <p>
                  O celular hoje em dia já faz parte do nosso cotidiano, nós não podemos negar. Com todo esse contato, alguns perrengues acabam se tornando inevitáveis.
                </p>
              </div>
            </div>
            <div class="box">
              <div class="head-box">
                <div class="img-box">
                  <img src="{{ URL::asset('assets/images/heart.png') }}" alt="" />
                </div>
                <h6>
                  Aproveite nosso seguro
                </h6>
              </div>
              <div class="detail-box">
                <p>
                  Hoje em dia, é difícil conhecer uma pessoa que não possua um smartphone, mas, será que todo mundo que tem um aparelho celular tem seguro?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end download section -->

  <!-- about section -->
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
              <a href="{{ URL::to('page/about') }}">
                Saiba mais
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

  <!-- subscribe section -->
  <section class="subscribe_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Fique por dentro:
        </h2>
      </div>
      <form action="" class="layout_padding2-top">
        <input type="email" placeholder="Seu email" />
        <button>
          Inscreva-se
        </button>
      </form>
    </div>
  </section>

  <!-- end subscribe section -->

  <!-- client section -->
  <section class="client_section layout_margin">
    <div class="container">
      <div class="heading_container">
        <h2>
          Sua avaliação é muito importante para nós!
        </h2>
      </div>
      <div class="client_container layout_padding2-top">
        <div class="client-id">
          <div class="img-box">
            <img src="{{ URL::asset('assets/images/client.png') }}" alt="" />
          </div>
          <div class="name">
            <img src="{{ URL::asset('assets/images/quote.png') }}" alt="" />
            <h6>
              Gabriel Fernandes
            </h6>
            <p>
              Aluno CSI
            </p>
          </div>
        </div>
        <div class="client-detail">
          <p>
            A atenção e suporte que tive com toda a equipe da Get ready que me atendeu desdo dia que fui roubado, 
            até o dia do pagamento do reembolso do seguro foi perfeita, sempre estavam preparados para me 
            atender e ajudar.
          </p>
        </div>
      </div>

      <div class="client_container layout_padding2-top">
        <div class="client-id">
          <div class="img-box">
            <img src="{{ URL::asset('assets/images/client.jpg') }}" alt="" />
          </div>
          <div class="name">
            <img src="{{ URL::asset('assets/images/quote.png') }}" alt="" />
            <h6>
              Vinicius Anolim
            </h6>
            <p>
              Aluno CSI
            </p>
          </div>
        </div>
        <div class="client-detail">
          <p>
            Sem dúvidas, a melhor seguradora do mundo! Sem burocracia, nada sistemático, 
            tudo de uma maneira bem humana e direta!
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="d-flex ">
        <h2>
          Fale conosco
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">

          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Nome">
                </div>
                <div>
                  <input type="text" placeholder="Número de celular">
                </div>
                <div>
                  <input type="email" placeholder="Email">
                </div>
                <div class="mt-5">
                  <input type="text" placeholder="Deixe sua mensagem">
                </div>
                <div class="mt-5">
                  <button type="submit">
                    Enviar
                  </button>
                </div>
              </div>

            </div>

          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="{{ URL::asset('assets/images/tela 3.PNG') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
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