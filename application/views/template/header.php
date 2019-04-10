<!doctype html>
<html lang="br-BR">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <style>
    @import url('https://fonts.googleapis.com/css?family=Ubuntu');
  </style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/cores.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>São Vicente Web Radio</title>
</head>
<body>
  <!-- nav bar menu-->
  <nav class="fixed-top navbar navbar-expand-lg azul_escuro pt-2 pb-2 tam_font_1_5em ">
    
    <button class=" border-primary navbar-toggler col-md-4" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon font_cor_branca">......</span>
    </button>

    <div class="collapse navbar-collapse  col-md-12" id="textoNavbar">
      <a class="navbar-brand font_cor_branca col-md-6 font_cor_branca_hover " href="#">São Vicente Web Radio</a>

      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link font_cor_branca font_cor_branca_hover" href="<?php echo base_url(); ?>">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link font_cor_branca font_cor_branca_hover" href="<?php echo base_url(); ?>">Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font_cor_branca font_cor_branca_hover" href="<?php echo base_url(); ?>">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font_cor_branca font_cor_branca_hover" href="<?php echo base_url(); ?>">Divulgue</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font_cor_branca font_cor_branca_hover" href="<?php echo base_url(); ?>/pedir_musica">Pessa sua musica</a>
        </li>

        <li class="nav-item">
          <a class="nav-link font_cor_branca font_cor_branca_hover" href="<?php echo base_url(); ?>restrict">&nbsp;</a>
        </li>

      </ul>
      
    </div>
  </nav>

  <div class="index_traz container col-md-3 col-sm-12 cinza font_cor_branca mt-5 mb-5 fixed-top mar_lef espasamento_midia">

    <div class="mt-3"> <br></div>
    
    

    



    <div class="card cinza border-0 mt-1 fixed-left ">
      <img class="card-img-top col-md-12 col-sm-3 col-5 sumir" src="<?php echo base_url(); ?>public/img/logo.png" alt="Imagem de capa do card">

      
      <!--<audio autoplay class="col-md-12 col-sm-12 col-12" controls src="http://s37.myradiostream.com:12488/"></audio>-->
      
      <script class="col-md-10 col-sm-12 col-12" src="//myradiostream.com/embed/herRADIO"></script>
      
      <div class="card-body ">
        <h5 class="card-title font-weight-bold text-center sumir">SÃO VICENTE WEBRADIO</h5>
        <p class="card-text text-center sumir">Em todas as plataformas sem app.</p>

        <h6 class="card-title font-weight-bold text-center sumir">Programação</h6>
        <p class="card-text text-center sumir">06:30 forrozão, 8:30 reggae, 11:30 eletronicas, 1:30 artistas da região, 3:30 variadas, 6:30 flhas-backs.</p>

        
        
      </div>
    </div>
    <div  class=" completar_esquerda">
      <p>&nbsp;</p>
    </div>
  </div>
  <!-- lateral esquerda-->
  <div class="mt-3"> <br><br></div>