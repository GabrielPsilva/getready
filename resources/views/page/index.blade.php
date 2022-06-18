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
                <a href="contact.html">DÚVIDAS</a>
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
                 <br />
                  
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
                <svg height="512pt" viewBox="0 0 512 512.08926" width="512pt" xmlns="http://www.w3.org/2000/svg">
                  <path d="m383.808594 117.007812 11.316406-11.3125 11.3125 11.3125-11.3125 11.3125zm0 0" />
                  <path d="m146.390625 354.433594 112-112 11.3125 11.3125-112 112zm0 0" />
                  <path d="m32.042969 456.089844h176v16h-176zm0 0" />
                  <path d="m32.042969 424.089844h32v16h-32zm0 0" />
                  <path d="m80.042969 424.089844h32v16h-32zm0 0" />
                  <path d="m128.042969 424.089844h80v16h-80zm0 0" />
                  <path
                    d="m455.078125 170.191406c42.605469-42.335937 63.105469-102.078125 55.460937-161.652344l-.796874-6.179687-6.175782-.796875c-59.574218-7.621094-119.304687 12.886719-161.632812 55.496094l-28.945313 28.949218-50.910156-5.65625-76.257813 76.257813 39.601563 39.601563 33.933594-33.945313 11.601562 11.601563-34.222656 34.222656h-204.691406c-17.671875 0-32.0000002 14.328125-32.0000002 32v240c0 17.671875 14.3281252 32 32.0000002 32h352c17.675781 0 32-14.328125 32-32v-214.296875l15.738281-15.734375-5.65625-50.90625zm40.253906-153.398437c2.945313 31.992187-2.863281 64.183593-16.800781 93.128906l-76.320312-76.328125c28.949218-13.929688 61.132812-19.734375 93.121093-16.800781zm-247.289062 134.160156-22.621094 22.632813-16.976563-16.976563 59.503907-59.511719 30.550781 3.398438-27.679688 27.671875zm34.226562 34.222656 16.6875 16.691407-22.632812 22.621093 11.3125 11.3125 22.632812-22.625 16.6875 16.691407-66.632812 66.621093 11.3125 11.3125 66.632812-66.625 11.597657 11.601563-33.941407 33.945312 39.597657 39.589844 12.519531-12.527344v70.304688h-320v-128h140.691406l-16.410156 16.398437 11.3125 11.3125zm117.773438 294.914063c0 8.835937-7.160157 16-16 16h-352c-8.835938 0-16-7.164063-16-16v-240c0-8.835938 7.164062-16 16-16h188.691406l-16 16h-172.691406v160h352v-102.296875l16-16zm-44.519531-176.402344-16.976563-16.964844 22.632813-22.632812 50.449218-50.457032 3.390625 30.550782zm5.65625-62.230469-39.597657-39.589843 33.941407-33.945313-11.3125-11.3125-33.941407 33.9375-39.601562-39.59375 82.578125-82.582031c10.304687-10.296875 21.828125-19.296875 34.308594-26.808594l83.019531 83.015625c-7.515625 12.476563-16.515625 23.996094-26.808594 34.304687zm0 0" />
                  <path d="m186.382812 66.429688 64.003907-64 11.3125 11.3125-64.003907 64zm0 0" />
                  <path d="m122.382812 66.429688 48-47.996094 11.3125 11.3125-48 48zm0 0" />
                  <path d="m434.386719 314.429688 64.003906-64 11.3125 11.3125-64 64zm0 0" />
                  <path d="m434.386719 378.429688 47.996093-47.996094 11.316407 11.3125-48 48zm0 0" />
                  <path d="m138.386719 306.429688 22.628906-22.625 11.3125 11.3125-22.628906 22.628906zm0 0" />
                  <path d="m226.390625 330.429688 22.628906-22.625 11.3125 11.3125-22.628906 22.628906zm0 0" />
                  <path d="m232.042969 480.089844h136v-64h-136zm88-48h32v32h-32zm-72 0h56v32h-56zm0 0" />
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
                <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="m507.606 155.023-150.632-150.629c-2.813-2.814-6.628-4.394-10.606-4.394s-7.794 1.58-10.607 4.394l-56.4 56.398c-2.813 2.813-4.394 6.628-4.394 10.606 0 3.979 1.581 7.794 4.394 10.607l13.841 13.84c-33.74 29.925-72.881 47.928-116.557 53.559-36.544 4.712-62.791-1.46-63.013-1.515-7.85-1.938-15.823 2.692-18.028 10.47l-94.348 332.638c-2.421 5.543-1.342 12.235 3.236 16.719 2.919 2.859 6.709 4.284 10.496 4.284 2.481 0 4.957-.618 7.19-1.838l331.451-93.773c7.783-2.202 12.419-10.179 10.479-18.031-.243-.984-22.395-95.369 52.059-179.552l13.827 13.827c2.929 2.93 6.767 4.394 10.607 4.394 3.838 0 7.678-1.465 10.607-4.394l56.4-56.397c2.813-2.813 4.394-6.628 4.394-10.606s-1.582-7.795-4.396-10.607zm-174.946 177.892c-3.06 24.854-1.76 45.431-.144 58.27l-266.826 75.489 118.383-120.861c9.316 5.464 19.949 8.387 31.035 8.387 16.43 0 31.877-6.397 43.495-18.016h.001c23.982-23.982 23.982-63.005-.001-86.987s-63.006-23.982-86.989 0c-20.481 20.481-23.457 51.923-8.956 75.607l-116.943 119.39 75.082-264.715c12.839 1.616 33.42 2.919 58.28-.143 35.648-4.389 86.991-18.911 135.359-62.257l80.483 80.481c-43.346 48.366-57.869 99.708-62.259 135.355zm-139.834-62.506c6.144-6.144 14.211-9.214 22.281-9.214 8.068 0 16.139 3.072 22.281 9.214 12.286 12.286 12.286 32.275 0 44.561-5.952 5.951-13.864 9.228-22.281 9.228s-16.329-3.277-22.281-9.228c-12.285-12.285-12.285-32.275 0-44.561zm247.774-69.595-14.155-14.154c-.002-.002-.003-.003-.004-.005-.002-.002-.003-.003-.005-.005l-115.254-115.252 35.186-35.185 129.418 129.416z" />
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
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                  style="enable-background:new 0 0 512 512;" xml:space="preserve">
                  <g>
                    <g>
                      <g>
                        <path d="M294,198H60c-33.084,0-60,26.916-60,60v154c0,33.084,26.916,60,60,60h234c33.084,0,60-26.916,60-60V258
                     C354,224.916,327.084,198,294,198z M314,412c0,11.028-8.972,20-20,20H60c-11.028,0-20-8.972-20-20V258c0-11.028,8.972-20,20-20
                     h234c11.028,0,20,8.972,20,20V412z" />
                        <rect y="120" width="40" height="40" />
                        <path d="M40,40C17.909,40,0,57.909,0,80h40V40z" />
                        <rect x="236" y="40" width="40" height="40" />
                        <rect x="158" y="40" width="40" height="40" />
                        <rect x="79" y="40" width="40" height="40" />
                        <path d="M472,40v40h40C512,57.909,494.091,40,472,40z" />
                        <rect x="472" y="354" width="40" height="40" />
                        <rect x="472" y="276" width="40" height="40" />
                        <rect x="472" y="198" width="40" height="40" />
                        <rect x="314" y="40" width="40" height="40" />
                        <rect x="472" y="120" width="40" height="40" />
                        <rect x="393" y="432" width="40" height="40" />
                        <path d="M472,472c22.091,0,40-17.909,40-40h-40V472z" />
                        <rect x="393" y="40" width="40" height="40" />
                      </g>
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>

              </div>
              <h6>
              Solução de resolução
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
              Reprehenderit
            </p>
          </div>
        </div>
        <div class="client-detail">
          <p>
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud esse cillum
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