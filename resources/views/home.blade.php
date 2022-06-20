@extends('adminlte::page')

@section('title', 'Get ready - Home')

@section('content_header')
    <h1 style="text-align: center;">Bem-Vindo {{ $user->name }}</h1>
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
  <div class="col-md-3">
  
  <div class="card card-primary card-outline">
  <div class="card-body box-profile">
  <div class="text-center">
  <img class="profile-user-img img-fluid img-circle" src="assets/images/person-icon.png" alt="profile picture">
  </div>
  <h3 class="profile-username text-center">{{ $user->name }}</h3>
  <p class="text-muted text-center">{{ $user->email }}</p>
  <ul class="list-group list-group-unbordered mb-3">
  <li class="list-group-item">
  <b>ID usuário</b> <a class="float-right">{{ $user->id }}</a>
  </li>
  </ul>
  <a href="{{URL::to('user/perfil')}}" class="btn btn-primary btn-block"><b>Perfil</b></a>
  </div>
  
  </div>
  
  
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Contrate em 3 passos:</h3>
  </div>
  
  <div class="card-body">
  <strong>1.</strong>
  <p class="text-muted">
    Informe seus dados e o modelo do aparelho
  </p>
  <hr>
  <strong>2.</strong>
  <p class="text-muted">Escolha a cobertura desejada</p>
  <hr>
  <strong>3.</strong>
  <p class="text-muted">
    Inclua os dados para pagamento
  </p>
  <hr>
  <strong><i class="far fa-file-alt mr-1"></i> Dica</strong>
  <p class="text-muted">
    O IMEI* é uma sequência numérica exclusiva (e global) que identifica o seu aparelho
     celular como único - é como se fosse o nosso CPF. 😉 Para acionar o seguro, será necessário informar 
     essa sequência numérica e é extremamente importante que esteja tudo certinho.
    </p>
    <a class="btn btn-primary " href="{{URL::to('orcamento/create/')}}">Solicitar orçamento</a>
  </div>
  
  </div>
  
  </div>
  
  <div class="col-md-9">
  <div class="card">
  <div class="card-header p-2">
  <ul class="nav nav-pills">
  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Novidades</a></li>
  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Deixe um comentário</a></li>
  </ul>
  </div>
  <div class="card-body">
  <div class="tab-content">
  <div class="tab-pane active" id="activity">
  
 
  
  
  <div class="post">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="vendor/adminlte/dist/img/getready-500px.png" alt="User Image">
    <span class="username">
    <a href="#">Get ready</a>
    
    </span>
    </div>
    
    <div class="row mb-3">
    <div class="col-sm-6">
    <img class="img-fluid" src="assets/images/teaser_57.jpg" alt="Photo">
    </div>
    
    <div class="col-sm-6">
    <div class="row">
    
    <div class="col-sm-6">
    <img class="img-fluid mb-3" src="assets/images/Samsung_Logo.png" alt="Photo">
    </div>
    
    </div>
    <h4>Vantagens do A12 samsung</h4>
        <p>
        O processador do A12 é o suficiente para o uso cotidiano. Ele usa um Helio P35, 
        que é um octa-core com velocidade de até 2,3 GHz. Esse chipset, em conjunto com a memória RAM de 4 GB, 
        é capaz de rodar tranquilamente os aplicativos e jogos mais leves da Play Store.
        </p>
    </div>
    
    </div>
    <h4>Novo aparelho adicionado em nossos catálogos de seguros.</h4>
     <p>
        A GET READY disponibilizou um novo aparelho para os nossos seguros. Todos os três modelos de
        32 GB + 3 GB RAM, 64 GB + 4 GB RAM, 128 GB + 6 GB RAM. confira acima.
    </p>
  <form class="form-horizontal">
  <div class="input-group input-group-sm mb-0">
  
  <div class="input-group-append">
  <button type="submit" class="btn btn-danger">Leia Mais</button>
  </div>
  </div>
  </form>
  </div>
  
  
  <div class="post">
  <div class="user-block">
  <img class="img-circle img-bordered-sm" src="vendor/adminlte/dist/img/getready-500px.png" alt="User Image">
  <span class="username">
  <a href="#">Get ready</a>
  
  </span>
  </div>
  
  <div class="row mb-3">
  <div class="col-sm-6">
  <img class="img-fluid" src="vendor/adminlte/dist/img/getready-500px.png" alt="Photo">
  </div>
  
  <div class="col-sm-6">
  <div class="row">
  <div class="col-sm-6">
  <img class="img-fluid mb-3" src="assets/images/tela 1 (1).PNG" alt="Photo">
  </div>
  
  <div class="col-sm-6">
  <img class="img-fluid mb-3" src="assets/images/tela 2 teste.PNG" alt="Photo">
  </div>
  
  </div>
  <h4>Aplicativo em desenvolvimento</h4>
  <p>
    Protótipo de aplicativo atualmente sendo desenvolvido pela equipe de desenvolvimento da <b>GET READY!</b>
    </p>
  </div>
  
  </div>
  
  <form class="form-horizontal">
    <div class="input-group input-group-sm mb-0">
    
    <div class="input-group-append">
    <button type="submit" class="btn btn-danger">Leia Mais</button>
    </div>
    </div>
    </form>

  </div>
  
  </div>
  
  
  <div class="tab-pane" id="settings">
  <form class="form-horizontal">
  <div class="form-group row">
  <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
  <div class="col-sm-10">
  <input type="email" class="form-control" id="inputName" placeholder="Nome">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>
  </div>
  <div class="form-group row">
    <label for="customFile" class="col-sm-2 col-form-label">Envie um arquivo</label>
    <div class="col-sm-10">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Escolha</label>
    </div>
  </div>
  </div>
  <div class="form-group row">
  <label for="inputExperience" class="col-sm-2 col-form-label">Deixe sua mensagem</label>
  <div class="col-sm-10">
  <textarea class="form-control" id="inputExperience" placeholder="Deixe sua mensagem aqui"></textarea>
  </div>
  </div>
  <div class="form-group row">
  <div class="offset-sm-2 col-sm-10">
  <button type="submit" class="btn btn-danger">Enviar</button>
  </div>
  </div>
  </form>
  </div>
  
  </div>
  
  </div>
  </div>
  
  </div>
  
  </div>
  
  </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop