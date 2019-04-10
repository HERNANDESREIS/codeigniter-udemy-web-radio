<?php
//echo 'oooooi!!!';
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Curso de codeignite!!</title>
  </head>
  <body>
  	<div class="container">
	  <div class="row">


<div class="col-md-12">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<hr>
</div>
</div>
<!--   -->

    	<div class="row">
		<div class="col-md-3">
			<p> </p>
		</div>
		<div class="col-md-6">
			<?php if($alerta != null) { ?>
				

				<div class="alert alert-<?php echo $alerta['class']; ?>">
				<?php echo $alerta['mensagem']; ?>
				</div>
			<?php }	?>

		

<br>
				
			<form action="<?php base_url('conta/entrar'); ?>" method="POST">
			<h1>Area de login</h1>
			<hr>
 				<div class="form-group">

					<input type="hidden" name="captcha">

    				<label for="email">Endereço de login</label>
    				<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Login" Required>
    				<small id="emailHelp" class="form-text text-muted">Use dos dados do usuario adm do sistema</small>
  				</div>
  				<div class="form-group">
    				<label for="senha">Senha</label>
    				<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" Required>
  				</div>
  					<div class="form-group form-check">
    				
  				</div>
  				<button type="submit" name="entrar" class="btn btn-primary pull-right">Entrar</button>
			</form>


			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>