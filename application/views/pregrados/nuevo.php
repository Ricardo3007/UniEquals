<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--Modal: Login / Register Form-->
<div class="modal fade bd-example-modal-lg" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!-- CASCADING -->
  <div class="modal-dialog modal-xl cascading-modal" role="document">
    <!--Content-->
       <div class="modal-content">

      <!--Modal cascading tabs-->
          <div class="modal-c-tabs ">

                <!-- Nav tabs -->
             <ul class="nav nav-tabs md-tabs tabs-2 " role="tablist">
                 <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                    Insertar Pregrado</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                    Crear nueva carrera</a>
                 </li>
             </ul><!-- CIERRA NAV -->

        <!-- Tab panels -->
        <div class="tab-content">

        
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
              
 <!--Panel 7-->
 <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
<h3><?php  

?>
</h3>
<!--Body-->
<form   method="post" name="formnew" id="formnew">
    <div class="modal-body">
       <p class="statusMsg">
       <div id="resultados"> </div>
       </p>
       <div class="card-body d-flex justify-content-between align-items-center">
       <button type="button" class="btn btn-sm btn-danger " data-toggle="popover" title="Creacion de carreras" data-content="Antes de insertar un pregrado verifique que la carrera este disponible en la base de datos de lo contrario crearla en la pestaña crear carrera">Info</button>
					</div>
<!-- Modal Header -->
<div class="modal-header">

<h1 class="text-uppercase" name="dropEntidad" id="dropEntidad"><?php if(isset($razon)){ foreach($razon as $ent){?>
                        <?php echo $ent->razonsocial; ?></option>
                        <?php } } ?></h1>
                        <br>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      
      
           <br>.
           <br>        
                    
     
<!-- ROWS -->
<div class="row">

<div class="col-md-3 ml-auto"> 
       <div class="form-group">
          <label>SNIES:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
               <input type="text" class="form-control" name="snies" placeholder="Codigo Snies" required>
          </div>
          </div>
</div>

<div class="col-md-3 ml-auto">
       <div class="form-group">
          <label>ACREDITACION:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa  fa-user"></i>
          </div>
               <input type="text" class="form-control" name="acreditacion" placeholder="Acreditacion" required>
          </div>
          </div>
</div>

<div class="col-md-3 ml-auto">
       <div class="form-group">
          <label>DURACION:</label>
        <div class="input-group">
        <div class="input-group-addon">
              <i class="fa fa-user"></i>
        </div>
             <input type="text" class="form-control" name="duracion" placeholder="Semestres " required>
        </div>
        </div>
</div>
          
<div class="col-md-3 ml-auto"> 
       <div class="form-group">
          <label>N° CREDITOS:</label>
       <div class ="input-group">
       <div class="input-group-addon">
             <i class="fa fa-user"></i>
       </div>
            <input type="text" class="form-control" name="creditos" placeholder=" N° creditos" required>
       </div>
       </div>
</div>

</div><!-- END ROWS -->

<div class="row"><!-- ROWS -->
         <div class="col-4 col-lg-8"> <label for="message-text" class="col-form-label">PERFIL OCUPACIONAL:</label>
         <textarea class="form-control" name="perfilocupacional" placeholder="Describa los perfiles que ofrece su nuevo pregrado"></textarea>
      </div>
</div><!-- END ROWS -->


<br>
<br>

<div class="row"><!-- ROWS -->
    <div class="col-md-2 ml-auto"> 
         <div class="form-group">
           <label>VALOR $:</label>
          <div class="input-group">
          <div class="input-group-addon">
               <i class="fa fa-user"></i>
          </div>
              <input type="text" class="form-control" name="valormatricula" placeholder="Valor de matricula " required>
          </div>
          </div>
      </div>
      
     <div class="col-md-3 ml-auto">
                    <label for="dropCategoria">NOMBRE CARRERA</label>
                    <select name="dropCategoria" id="dropCategoria" class="form-control">
                        <option value="0">Seleccionar</option>
                        <?php if(isset($carreras)){ foreach($carreras as $car){?>
                        <option value="<?php echo $car->cod; ?>"><?php echo $car->nombre; ?></option>
                        <?php } } ?>
                    </select>
     </div>
         
    <div class="col-md-3 ml-auto">
                    <label for="dropModalidad">TIPO DE MODALIDAD</label>
                    <select name="dropModalidad" id="dropModalidad" class="form-control">
                        <option value="0">Seleccionar</option>
                        <?php if(isset($modalidad)){ foreach($modalidad as $mod){?>
                        <option value="<?php echo $mod->cod; ?>"><?php echo $mod->tipomodalidad; ?></option>
                        <?php } } ?>
                    </select>
      </div>

    <div class="col-md-3 ml-auto">
                    <label for="dropFormacion">TIPO DE FORMACION</label>
                    <select name="dropFormacion" id="dropFormacion" class="form-control">
                        <option value="0">Seleccionar</option>
                        <?php if(isset($formacion)){ foreach($formacion as $for){?>
                        <option value="<?php echo $for->cod; ?>"><?php echo $for->tipoformacion; ?></option>
                        <?php } } ?>
                    </select>
      </div>

</div><!-- END ROWS -->
</div><!-- FIN ROW PRINCIPAL --> 

</div><!-- Fin modal body-->

      <!-- Modal Footer -->
      <div class="modal-footer">
  <div class='col-md-2'>
        <button type="button" class="btn btn-danger" data-dismiss="modal"  >Cerrar</button>
    </div>
  <div class='col-md-2'>
        <button type="submit" class="btn btn-success" id="guardar">Guardar</button>
    </div>
    
    
</div><!-- FIN FOOTER -->

</form>  
</div><!--/.Panel 7-->

          

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">
          <form   method="post" name="formnew2" id="formnew2">
    <div class="modal-body">
       <p class="statusMsg">
       <div id="resultados2"> </div>
       </p>
       <div class="modal-header">
<h1 class="text-uppercase" name="dropEntidad" id="dropEntidad"><?php if(isset($razon)){ foreach($razon as $ent){?>
                        <?php echo $ent->razonsocial; ?></option>
                        <?php } } ?></h1>
                  <br><br>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
            <!--Body-->
            <div class="modal-body">
           
            <div class="row">

<div class="col-md-6 ml-auto"> 
       <div class="form-group">
          <label>NOMBRE:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
               <input type="text" class="form-control" name="nombre" placeholder=" Nombre de carrera" required>
          </div>
          </div>
</div>

<div class="col-md-6 ml-auto">
       <div class="form-group">
          <label>ACRETITULODITACION:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa  fa-user"></i>
          </div>
               <input type="text" class="form-control" name="titulo" placeholder="Titulo que otorga" required>
          </div>
          </div>
</div>
  </div>


              
            </div><!-- CIERRA BODY -->
                        </form>

         <!-- Modal Footer -->
  <div class="modal-footer">
  <div class='col-md-2'>
        <button type="button" class="btn btn-danger" data-dismiss="modal"  >Cerrar</button>
    </div>
  <div class='col-md-2'>
        <button type="submit" class="btn btn-success" id="guardar">Guardar</button>
    </div>
    
    
</div><!-- FIN FOOTER -->
         
          </div> <!--CIERRA Panel 8-->

    
         
        </div><!-- CIERRA TAB PANEL -->

      </div><!-- CIERRA Modal cascading tabs-->
    </div> <!-- CIERRA Content-->
   
  </div><!-- CIERRA CASCADING -->
</div><!-- CIERRA Modal: Login / Register Form-->

<script type="text/javascript">

function removeMessage(){
    setTimeout(function () 
    {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            //$(this).remove();
            $(".alert").alert('close');
        });
    }, 5000);
}


 function limpiar()
 {
    $('#formnew').find('input:text, input:password, input:file, select, textarea').val('');
 }



 $('#formnew').submit(function(event)
 {
    var parametros = $('#formnew').serialize();
    
    var salida="";
         $.ajax({
                type: "POST",
                url: "<?php echo base_url('Universidad/guardar');?>",
                data: parametros,
                beforeSend: function() {
                  $('#resultados').show();
                 },
                error: function() {
                 $('#resultados').html(salida);
                  },
                success: function(datos){
                  $('#resultados').html(datos);
                 // limpiar();     
                  removeMessage();
            }
        });
       // event.preventDefault();
     
  }) 
</script>


<script type="text/javascript">

function removeMessage(){
    setTimeout(function () 
    {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            //$(this).remove();
            $(".alert").alert('close');
        });
    }, 5000);
}


 function limpiar()
 {
    $('#formnew2').find('input:text, input:password, input:file, select, textarea').val('');
 }



 $('#formnew2').submit(function(event)
 {
    var parametros = $('#formnew2').serialize();
    
    var salida="";
         $.ajax({
                type: "POST",
                url: "<?php echo base_url('Universidad/guardarNuevasCarreras');?>",
                data: parametros,
                beforeSend: function() {
                  $('#resultados2').show();
                 },
                error: function() {
                 $('#resultados2').html(salida);
                  },
                success: function(datos){
                  $('#resultados2').html(datos);
                  //limpiar();     
                  removeMessage();
            }
           
            
        });
       // event.preventDefault();
     
  }) 
 
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>