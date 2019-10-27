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
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/cover.css');?>">

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
					<a class="nav-link active" href="#">Inicio</a>
					<a class="nav-link" href="#">Blog</a>
					<a class="nav-link" href="#">Test</a>
					<a class="nav-link" href="<?php echo base_url('/Login');?>"data-toggle="modal" data-target="#exampleModalCenter" >Login</a>
					<a class="nav-link" href="#">Register</a>
					<a class="nav-link" href="#">Nosotros</a>
					
				</nav>
			</div>
		</header>

	  <main role="main" class="inner cover">
		<h1 class="cover-heading">UniEquals</h1>
		<p class="lead">Escoger donde hacer tus estudios de educacion superior nunca fue tan sencillo.</p>
		<p class="lead">
		<a href="<?php echo base_url('/Comparar');?>" class="btn btn-success btn-lg ">Adelante!</a>
		</p>
	  </main>

	   <footer class="mastfoot mt-auto">
		<div class="inner">
		<p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
		</div>
	  </footer>
</div>
</body>
</html>
