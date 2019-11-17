
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pregrados</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script>src="https://unpkg.com/popper.js"</script>
  <script>src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/w/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
  
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dashboard.css');?>">
    <!-- Datatables CSS -->
 
    <!-- Se llama aca para que cargue de primero -->
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.js');?>"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
 
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-6 col-md-4 mr-0" href="#">ADMINISTRACION UNIVERSITARIA</a>
  
  <ul class="navbar-nav px-3">
  <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                 
                   <?php 
                    $user=$this->session->userdata('user_data')['nombres'].' '.$this->session->userdata('user_data')['apellidos'];
                    echo $user;
                   ?>
                </a>
               
              </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('Universidad/indexadministracion');?>">
              <span data-feather="home" class="text-uppercase" name="dropEntidad" id="dropEntidad"><?php if(isset($razon)){ foreach($razon as $ent){?>
                        <?php echo $ent->razonsocial; ?>
                        <?php } } ?></span>
               <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Universidad/perfilpersonal');?>">
              <span data-feather="file"></span>
              Perfil Personal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Universidad/perfilentidad');?>">
              <span data-feather="file"></span>
              Perfil Entidad
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Universidad/pregrados');?>">
              <span data-feather="shopping-cart"></span>
              Lista de Pregrados
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Universidad/interesados');?>">
              <span data-feather="users"></span>
              Lista de Interesados
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Universidad/contactenos');?>">
              <span data-feather="bar-chart-2"></span>
              Contactenos
            </a>
          </li>
        
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>REPORTES</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Reporte 1
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
           Reporte 2          
           </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Reporte 3
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Reporte 4
            </a>
          </li>

        </ul>
        <a class="d-flex align-items-center text-muted" href="<?php echo base_url('/Universidad')?>">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>SALIR DE ADMINISTRACION</span>
          
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
          
        </div>
        
      </div>
      <div class="container-fluid">
      
            <!-- Cargamos el contenido del Controller -->
            <?php if(isset($content)){
              
            } $this->load->view($content);  ?>
        </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

     
    </main>
  </div>
</div>

</body>
</html>
<?php
$this->load->view('pregrados/nuevo'); // view/index.php
$this->load->view('pregrados/editar');

?>