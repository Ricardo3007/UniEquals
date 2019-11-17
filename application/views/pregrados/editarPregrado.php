<!--  BEGIN  Fomrulario Add   -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="editmodalForm" >
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <h2 class="text-uppercase" >ACTUALIZAR INFORMACION DE PREGRADOS
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

function editarpre(cod)
{
$(document).ready(function(){
$.get("<?php echo base_url('universidad/detallespregrados/');?>"+cod,{cod:cod},function(datos){
var obj=JSON.parse(datos);
$('[name="cod"]').val(obj["cod"]);
$('[name="snies"]').val(obj["snies"]);
$('[name="acreditacion"]').val(obj["acreditacion"]);
$('[name="duracion"]').val(obj["duracion"]);
$('[name="creditos"]').val(obj["creditos"]);
$('[name="perfilocupacional"]').val(obj["perfilocupacional"]);
$('[name="valormatricula"]').val(obj["valormatricula"]);
$('[name="dropModalidad"]').val(obj["dropModalidad"]);
$('[name="dropFormacion"]').val(obj["dropFormacion"]);

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
                url: "<?php echo base_url('universidad/actualizarPregrados');?>", 
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



