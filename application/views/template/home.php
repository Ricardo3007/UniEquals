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
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/estilos.css');?>">
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
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">UniEquals</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container-fluid">
            <!-- Cargamos el contenido del Controller -->
            <?php if(isset($content)) $this->load->view($content);  ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
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