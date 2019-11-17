

<br>
<br>
<br>
<br>

<div class="text-center">

      <div class="row">
        <div class="col-lg-12 text-center">
        
          <br>
          <h2 class="section-heading text-uppercase">Escoge la opcion que desees!</h2>
          <br>
          <br>
          <br>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
          <a href="#"><img class="mx-auto rounded-circle" src="public/imagenes/pregra.jpg" alt="uno"></a>
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url('Universidad/indexadministracion');?>"  > <h4>ADMINISTRACION</h4></a>
            <?php 
 
            
                    $user=$this->session->userdata('user_data')['cod'];
                   /*  echo $user */;
                   ?>
            <p class="text-muted" >Podras administrar toda la informacion referente a tu universidad</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
           <a data-toggle="modal" href="#modalForm" data-backdrop="static"> <img class="mx-auto rounded-circle" src="public/imagenes/crear.jpg" alt="dos"></a>
           
            <a class="nav-link js-scroll-trigger"data-toggle="modal" href="#modalForm" data-backdrop="static"  > <h4>INSERTAR PREGRADO </h4></a>
            <?php 

            
                    $user=$this->session->userdata('user_data')['cod'];
                   /*  echo $user */;
                   ?>
                  
                  
           
            <p class="text-muted">Podras insertar nuevos pregrados adquiridos en la universidad  de manera mas rapida sin necesidad de entrar a la plataforma de administracion .</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
          <a href="#"> <img class="mx-auto rounded-circle" src="public/imagenes/perfil.jpg" alt="tres"></a>
            <a class="nav-link js-scroll-trigger" href="#">  <h4>PERFIL</h4></a>

         
            <p class="text-muted">Podras acceder y actualizar la informacion de tus perfiles tanto personal, como el perfil universitario</p>
           
          </div>
        </div>
      </div>
       
      </div>
   	
<?php
$this->load->view('pregrados/nuevo'); // view/index.php
$this->load->view('pregrados/editar');
/* $this->load->view('pregrados/listar_pregrados'); // view/index.php */
?>