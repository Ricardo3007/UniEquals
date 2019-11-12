<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UniEquals - </title>
    <!-- PORBLEMA CON LAS LIBRERIAS LOCALES NO ENCONTRE EL PORQUE PERO TOCO MONTARLAS VIRTUALES -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script>src="https://unpkg.com/popper.js"</script>
  <script>src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/perfiles.css');?>">
    <!-- Datatables CSS -->
 
    <!-- Se llama aca para que cargue de primero -->
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.js');?>"></script>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<header class="masthead mb-auto">
			<div class="inner">
				<!-- <h3><a class="masthead-brand" href="#"><img src="" alt="logo "></a></h1> -->
				
				
			
								<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
					<div class="container">
					
					<a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('/Universidad');?>"><img src="public/imagenes/logo.png" alt="logo "></a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						Menu
						<i class="fas fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav text-uppercase ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="<?php echo base_url('/Universidad');?>">Inicio</a>
						</li>
            <li class="nav-item">
							<a class="nav-link js-scroll-trigger" id="miperfil"  href="#miperfil">Mi Perfil</a>
                        </li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger"  id="nosotros" href="<?php echo base_url('#nosotros');?>"> Nosotros</a>
						</li>
					
                        <li class="nav-item">
							<a class="nav-link js-scroll-trigger" id="salir"  href="<?php echo base_url('Home/cerrar_sesion');?>">Salir</a>
				
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

</html>
<script>

