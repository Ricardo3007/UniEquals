

<h1>Listado de Pregrados.</h1>
</p>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
 <i class="fa fa-user fa-lg"></i> Nuevo Pregrado</button>
 <br>
 <br>

<table id='detallecarreras' class="table table-hover">
    <thead>
      <tr>  
      <th>COD</th>  
      <th>SNIES</th>
      <th>NOMBRE</th>
      <th>ACREDITACION</th>
    
      <th></th>
      </tr>       
    </thead>
     <tbody>
     <?php
     foreach($detallespregrados as $reg)
      {
      ?>
       <tr>  
      <td><?php  echo $reg->cod; ?></td>   
      <td><?php  echo $reg->snies; ?></td>   
      <td><?php  echo $reg->nombre;?></td>  
      <td><?php  echo $reg->acreditacion; ?></td> 
   
      <td> 
       
      <button type="button" class="btn btn-primary" onclick="editarpre(<?php echo $reg->cod; ?>);">Actualizar informacion</button>
       </td>
       
      </tr>
     <?php 
       }//endforeach
     ?>   
    </tbody>
    <tfooter>
     <tr>  
        
      <th>SNIES</th>
      <th>NOMBRE</th>
      <th>ACREDITACION</th>
    
      <th></th>
      </tr>
    </tfooter>
    <?php
$this->load->view('pregrados/editarPregrado');
$this->load->view('pregrados/nuevo');

?>
</table> 
