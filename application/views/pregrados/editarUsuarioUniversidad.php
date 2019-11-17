<!--  BEGIN  Fomrulario Add   -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="editmodaluser" >
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <h2 class="text-uppercase" >Actualizar informacion
            </h2>
                 
                  
            </div>
            <!-- Modal Body -->
            <form   method="post" name="editformnewuser" id="editformnewuser">
            <div class="modal-body">
               <p class="statusMsg">
               <div id="resultados2"> </div>
               </p>
            <!-- ROWS -->
            <!-- ROWS -->
            <div class="row">
<input type="hidden" name="cod" id="cod">
<div class="col-md-4 ml-auto"> 
       <div class="form-group">
          <label> NOMBRES:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
               <input type="text" class="form-control" name="nombres"  required>
          </div>
          </div>
</div>

<div class="col-md-4 ml-auto">
       <div class="form-group">
          <label>APELLIDOS:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa  fa-user"></i>
          </div>
               <input type="text" class="form-control" name="apellidos" required>
          </div>
          </div>
</div>

<div class="col-md-4 ml-auto">
       <div class="form-group">
          <label>GENERO:</label>
        <div class="input-group">
        <div class="input-group-addon">
              <i class="fa fa-user"></i>
        </div>
             <input type="text" class="form-control" name="genero" required>
        </div>
        </div>
</div>
          


</div><!-- END ROWS -->


<br>
<div class="row"><!-- ROWS -->
    <div class="col-md-6 "> 
         <div class="form-group">
           <label>EMAIL:</label>
          <div class="input-group">
          <div class="input-group-addon">
               <i class="fa fa-user"></i>
          </div>
              <input type="text" class="form-control" name="email" required>
          </div>
          </div>
      </div>
      <div class="row">

<div class="col-md-6 ml-auto"> 
       <div class="form-group">
          <label>PASSWORD:</label>
       <div class="input-group">
       <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
               <input type="password" class="form-control" name="password"  required>
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
                            <button  class="btn btn-primary" id="guardar2">Guardar</button>
                        </div>
                    </div>
        </form>   
        </div>
    </div>
</div>
<!--  END  Fomrulario Add    -->



<script type="text/javascript">

function editaruser(cod)
{
$(document).ready(function(){
$.get("<?php echo base_url('universidad/obtenerusuario/');?>"+cod,{cod:cod},function(datos){
var obj=JSON.parse(datos);
$('[name="cod"]').val(obj["cod"]);
$('[name="nombres"]').val(obj["nombres"]);
$('[name="apellidos"]').val(obj["apellidos"]);
$('[name="genero"]').val(obj["genero"]);
$('[name="email"]').val(obj["email"]);
$('[name="password"]').val(obj["password"]);
$('#editmodaluser').modal({backdrop: false});
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
    $('#editformnewuser').find('input:text, input:password, input:file, select, textarea').val('');
 }



 
     
	var button = document.getElementById("guardar2");
    button.onclick = function(){
    var parametros = $('#editformnewuser').serialize();
    
    var salida="";
         $.ajax({
                type: "POST",
                url: "<?php echo base_url('universidad/actualizarUsuarioEntidad');?>", 
                data: parametros,
                beforeSend: function() {
                  $('#resultados2').show();
                 },
                error: function() {
                 $('#resultados2').html(salida);
                  },
                success: function(datos){
                  $('#resultados2').html(datos);
                  
                 // limpiar();     
                
            }  
            
          
        });
       

       //event.preventDefault();
     
  }
</script>



