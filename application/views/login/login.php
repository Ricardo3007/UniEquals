<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/estilos.css');?>">
		<!-- Cover CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/login.css');?>">
   

    	<title>UniEquals</title>
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="">
  </head>
  <body class="text-center">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
			<div class="inner">
				<!-- <h3><a class="masthead-brand" href="#"><img src="" alt="logo "></a></h1> -->
				<h3 class="masthead-brand">UniEquals</h3>
				
				<nav class="nav nav-masthead justify-content-center">
					<a class="nav-link active" href="<?php echo base_url('/Home');?>">Inicio</a>
					<a class="nav-link" href="#">Blog</a>
					<a class="nav-link" href="#">Test</a>
					<a class="nav-link" href="#">Register</a>
					<a class="nav-link" href="#">Nosotros</a>
					
				</nav>
			</div>
    </header>
    <main role="main" class="inner cover">
    <form class="form-signin">
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inicio De Sesion</h1>
  <label for="inputEmail" class="sr-only">Email </label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <br>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recordar contraseña
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>
</main>
</div>
</body>
</html>