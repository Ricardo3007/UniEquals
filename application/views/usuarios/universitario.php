
<div class="card text-center">
  <div class="card-header">
    Perfil Entidad
  </div>
  <div class="card-body">
  <table id='entidadeducativa' class="table table-hover table-responsive">
  <?php  foreach($entidad as $ent){?>
    <thead class="">
      <tr>     
      <tr>     

      <th>CODIGO DE ENTIDAD:</th>
    
      <th>                        <?php echo $ent->cod; ?>
                        </th>
      </tr>
      <th>RAZON SOCIAL:</th>
      <th>
                        <?php echo $ent->razonsocial; ?>
                        </th>
      </tr>
      
      <tr>     
      <th>NIT:</th>
      <th>
                        <?php echo $ent->nit; ?>
                        </th>
      </tr>
      <tr>     
      <th>SNIES :</th>
      <th>
                        <?php echo $ent->snies; ?>
                        </th>
      </tr>
      <tr>     
      <th>DESCRIPCION:</th>
      <th>
                        <?php echo $ent->descripcion; ?>
                        </th>
      </tr>
      <tr>     
      <th> URL:</th>
      <th>
                        <?php echo $ent->direccionurl;?>
                        </th>
      </tr>
      <tr>     
      <th> UBICACION:</th>
      <th>
                        <?php echo $ent->nombreubicacion." ".$ent->direccionubicacion;?>
                        </th>
      </tr>
      

     
     
    </thead>
     
    
</table> 

<button type="button" class="btn btn-primary" onclick="editar(<?php echo $ent->cod; ?>);">Actualizar informacion</button>
<?php }  ?>
<?php
$this->load->view('pregrados/editar');
?>
  </div>
  
</div>

