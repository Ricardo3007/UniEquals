

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
            <a class="nav-link js-scroll-trigger" href="#"><h4 >Ver pregrados</h4></a>
            
            <p class="text-muted" >Podras ver todos los pregrados inscritos y editarlos</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
           <a data-toggle="modal" href="#modalForm" data-backdrop="static"> <img class="mx-auto rounded-circle" src="public/imagenes/crear.jpg" alt="dos"></a>
           
            <a class="nav-link js-scroll-trigger"data-toggle="modal" href="#modalForm" data-backdrop="static"> <h4>Nuevos Pregrados</h4></a>

           
            <p class="text-muted">Podras insertar los nuevos pegrados adquiridos en la universidad.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
          <a href="#"> <img class="mx-auto rounded-circle" src="public/imagenes/perfil.jpg" alt="tres"></a>
            <a class="nav-link js-scroll-trigger" href="#">  <h4>Ver interesados</h4></a>

         
            <p class="text-muted">Podras ver una lista de usuarios interesados en estudiar en vuestra universidad , tambien podras imprimir un documentos pdf</p>
           
          </div>
        </div>
      </div>
       
      </div>
   
<?php
$this->load->view('pregrados/nuevo'); // view/index.php
?>