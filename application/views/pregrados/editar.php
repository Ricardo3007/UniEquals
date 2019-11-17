<!--  BEGIN  Fomrulario Add   -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="editmodalForm" >
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <h2 class="text-uppercase" >Actualizar informacion
            </h2>
                 
                  
            </div>
            <!-- Modal Body -->
            <form   method="post" name="editformnew" id="editformnew">
            <div class="modal-body">
               <p class="statusMsg">
               <div id="resultados"> </div>
               </p>
            <!-- ROWS -->
<div class="row">
<input type="hidden" name="cod" id="cod">
<div class="col-md-4 ml-auto"> 
       <div class="form-group">
          <label>RAZON SOCIAL:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
               <input type="text" class="form-control" name="razonsocial"  required>
          </div>
          </div>
</div>

<div class="col-md-4 ml-auto">
       <div class="form-group">
          <label>NIT:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa  fa-user"></i>
          </div>
               <input type="text" class="form-control" name="nit" required>
          </div>
          </div>
</div>

<div class="col-md-4 ml-auto">
       <div class="form-group">
          <label>SNIES:</label>
        <div class="input-group">
        <div class="input-group-addon">
              <i class="fa fa-user"></i>
        </div>
             <input type="text" class="form-control" name="snies" required>
        </div>
        </div>
</div>
          


</div><!-- END ROWS -->

<div class="row"><!-- ROWS -->
         <div class="col-6 col-lg-12"> <label for="message-text" class="col-form-label">DESCRIPCION:</label>
         <textarea class="form-control" name="descripcion" required></textarea>
      </div>
</div><!-- END ROWS -->
<br><br>
<div class="row"><!-- ROWS -->
    <div class="col-md-6 "> 
         <div class="form-group">
           <label>URL:</label>
          <div class="input-group">
          <div class="input-group-addon">
               <i class="fa fa-user"></i>
          </div>
              <input type="text" class="form-control" name="direccionurl" required>
          </div>
          </div>
      </div>
      <div class="row">

<div class="col-md-6 ml-auto"> 
       <div class="form-group">
          <label>NOMBRE DE UBICACION:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
               <input type="text" class="form-control" name="nombreubicacion"  required>
          </div>
          </div>
</div>

<div class="col-md-6 ml-auto">
       <div class="form-group">
          <label>DIRECCION DE UBICACION:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa  fa-user"></i>
          </div>
               <input type="text" class="form-control" name="direccionubicacion"  required>
          </div>
          </div>
</div>
  </div>
      
     

</div><!-- END ROWS -->
</div><!-- FIN ROW PRINCIPAL --> 

               
            <!-- Modal Footer -->
            <div class="modal-footer">
                        <div class='col-md-2'>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"  >Cerrar</button>
                        </div>
                        <div class='col-md-10'>
                            <button  class="btn btn-primary" id="guardar">Guardar</button>
                        </div>
                    </div>
        </form>   
        </div>
    </div>
</div>
<!--  END  Fomrulario Add    -->



<script type="text/javascript">

function editar(cod)
{
$(document).ready(function(){
$.get("<?php echo base_url('universidad/obtenercodEntidad/');?>"+cod,{cod:cod},function(datos){
var obj=JSON.parse(datos);
$('[name="cod"]').val(obj["cod"]);
$('[name="razonsocial"]').val(obj["razonsocial"]);
$('[name="nit"]').val(obj["nit"]);
$('[name="snies"]').val(obj["snies"]);
$('[name="descripcion"]').val(obj["descripcion"]);
$('[name="direccionurl"]').val(obj["direccionurl"]);
$('[name="nombreubicacion"]').val(obj["nombreubicacion"]);
$('[name="direccionubicacion"]').val(obj["direccionubicacion"]);
$('#editmodalForm').modal({backdrop: false});
});
});

}

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
    $('#editformnew').find('input:text, input:password, input:file, select, textarea').val('');
 }



 
     
	var button = document.getElementById("guardar");
    button.onclick = function(){
    var parametros = $('#editformnew').serialize();
    
    var salida="";
         $.ajax({
                type: "POST",
                url: "<?php echo base_url('universidad/actualizarentidad');?>", 
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
                
            }  
            
          
        });
       

       //event.preventDefault();
     
  }
</script>



<script type="text/javascript">

function editar(cod)
{
$(document).ready(function(){
$.get("<?php echo base_url('universidad/obtenercodEntidad/');?>"+cod,{cod:cod},function(datos){
var obj=JSON.parse(datos);
$('[name="cod"]').val(obj["cod"]);
$('[name="razonsocial"]').val(obj["razonsocial"]);
$('[name="nit"]').val(obj["nit"]);
$('[name="snies"]').val(obj["snies"]);
$('[name="descripcion"]').val(obj["descripcion"]);
$('[name="direccionurl"]').val(obj["direccionurl"]);
$('[name="nombreubicacion"]').val(obj["nombreubicacion"]);
$('[name="direccionubicacion"]').val(obj["direccionubicacion"]);
$('#editmodalForm').modal({backdrop: false});
});
});

}

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
    $('#editformnew').find('input:text, input:password, input:file, select, textarea').val('');
 }



 
     
	var button = document.getElementById("guardar");
    button.onclick = function(){
    var parametros = $('#editformnew').serialize();
    
    var salida="";
         $.ajax({
                type: "POST",
                url: "<?php echo base_url('universidad/actualizarentidad');?>", 
                data: parametros,
                beforeSend: function() {
                  $('#resultados').show();
                 },
                error: function() {
                 $('#resultados').html(salida);
                  },
                success: function(datos){
                  $('#resultados').html(datos);
                  removeMessage();
                 // limpiar();     
                
            }  
            
          
        });
       

       //event.preventDefault();
     
  }
</script>


