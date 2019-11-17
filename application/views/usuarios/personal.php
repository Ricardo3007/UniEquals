
<div class="card text-center">
  <div class="card-header">
    PERFIL DE USUARIO
  </div>
  <div class="card-body text-center">
  <table id='entidadeducativa' class="table table-hover table-responsive text-center">
  <?php  foreach($usuario as $usu){?>
    <thead class="">
      <tr>     
      <tr>     

      <th>CODIGO DE USUARIO:</th>
    
      <th>                        <?php echo $usu->cod; ?>
                        </th>
      </tr>
      <th>NOMBRES :</th>
      <th>
                        <?php echo $usu->nombres; ?>
                        </th>
      </tr>
      
      <tr>     
      <th>APELLIDOS:</th>
      <th>
                        <?php echo $usu->apellidos; ?>
                        </th>
      </tr>
      <tr>     
      <th>GENERO :</th>
      <th>
                        <?php echo $usu->genero; ?>
                        </th>
      </tr>
      <tr>     
      <th>EMAIL:</th>
      <th>
                        <?php echo $usu->email; ?>
                        </th>
      </tr>
           
     
    
      

     
     
    </thead>
     
    
</table> 

<button type="button" class="btn btn-primary" onclick="editaruser(<?php echo $usu->cod; ?>);">Actualizar informacion</button>
<?php }  ?>
<?php
$this->load->view('pregrados/editarUsuarioUniversidad');
?>
  </div>
  
</div>

