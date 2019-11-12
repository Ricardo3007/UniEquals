<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UniEquals - </title>
    <!-- Imagen Icon -->

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/cover.css');?>">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dataTables.bootstrap4.min.css');?>" />
    <!-- Notificaciones CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/toastr.min.css');?>" />
    <!-- Multi-Select CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/select2.min.css');?>">
    <!-- Se llama aca para que cargue de primero -->
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.js');?>"></script>
</head>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<header class="masthead mb-auto">
			<div class="inner">
				<!-- <h3><a class="masthead-brand" href="#"><img src="" alt="logo "></a></h1> -->
				
				
			
								<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
					<div class="container">
					<a class="masthead-brand" href="#"><img src="public/imagenes/logo.png" alt="logo "></a>
					
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						Menu
						<i class="fas fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav text-uppercase ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="<?php echo base_url('/Home');?>">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="<?php echo base_url('#blog');?>">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#test">Test</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" id="login" href="<?php echo base_url('/Home/login');?>">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="<?php echo base_url('/Home/registro');?>">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#register">Nosotros</a>
						</li>
						</ul>
					</div>
					</div>
					</nav>



			</div>
		</header>
			

    <main role="main" class="flex-shrink-0">
        <div class="container-fluid">
            <!-- Cargamos el contenido del Controller -->
            <?php if(isset($content)) $this->load->view($content);  ?>
        </div>
    </main>


	<footer class="mastfoot mt-auto text-center">
		<div class="inner">
		<p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
		</div>
	  </footer>
    </div>
</body>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/toastr.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/funciones.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/dataTables.bootstrap4.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/sweetalert.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/select2.min.js');?>"></script>
</html>
<script>

