


  
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  
  <main role="main" class="inner cover">
  <form class="form-signin" method="post" name="registro"id="registro">
  <div id="resultados"> </div>
<img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
<h1 class="h3 mb-3 font-weight-normal text-center">Registro </h1>
<label for="inputEmail" class="sr-only">nombres </label>
<input type="text"name="nombres" class="form-control" placeholder="Nombres" required autofocus>
<br>
<label  class="sr-only">Apellidos </label>
<input type="text"name="apellidos"  class="form-control" placeholder="Apellidos" required autofocus>
<br>
<label  class="sr-only">Genero </label>
<input type="text"name="genero"  class="form-control" placeholder="Masculino o Femenino" required autofocus>
<br>
<label  class="sr-only">Email </label>
<input type="text"name="email" class="form-control" placeholder="Email@gmail.com" required autofocus>
<br>
<label class="sr-only">Password</label>
<br>
<input type="password" name="password"class="form-control" placeholder="Password" required>
<div class="checkbox mb-3">

  <label>
    <input type="checkbox" value="remember-me"> Recordar contraseña
  </label>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
<p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>
</main>
</div>
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
    $('#registro').find('input:text, input:password, input:file, select, textarea').val('');
 }



 $('#registro').submit(function(event)
 {
    var parametros = $('#registro').serialize();
    
    var salida="";
         $.ajax({
                type: "POST",
                url: "<?php echo base_url('Home/guardarusuario');?>",
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