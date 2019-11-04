<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
	
		<!-- Cover CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/login.css');?>">
   

    	<title>UniEquals</title>
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="">
  </head>
  <body class="text-center">



  
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  
    <main role="main" class="inner cover">
    <form class="form-signin"action="<?php echo site_url('Home/verifica'); ?>" method="post">
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inicio De Sesion</h1>
  <label for="inputEmail" class="sr-only">Email </label>
  <input type="email"name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <br>
  <input type="password" name="password"id="inputPassword" class="form-control" placeholder="Password" required>
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
