
<br>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Selecciona el area de estudio</h5>
        <form id="formFiltro" Method="POST">
            <div class="row">
                <div class="col-md-3">
                    <label for="dropCategoria">Carrera de Interes</label>
                    <select name="dropCategoria" id="dropCategoria" class="form-control">
                    <option value="0">Seleccionar</option>
                    <?php if(isset($carreras)){ foreach($carreras as $car){?>
                        <option value="<?php echo $car->cod; ?>"><?php echo $car->nombre; ?></option>
                    <?php } } ?>
                    </select>
                </div>
                <div class="col-md-3">
                <label for="txtPresupuesto">Presupuesto: <span id="valorPresupuesto"></span></label>
                <input id="txtPresupuesto" name="txtPresupuesto" type="range"
                    min="300000" max="20000000" step="150000" value="2500000"
                    class="form-control" onchange="rangoNumerico(this)" >
                </div>
                <div class="col-md-3">
                    <button id="btnEnviar" type="submit"class="btn btn-primary btnMargin">
                        Continuar
                    </button>
                </div>
            </div>
        </form>
        <form id="formComparar" Method="POST">
        <div class="row">
            <div class="col-md-3">
                <button id="btnEnviar" type="submit"class="btn btn-btn-success">
                    Comparar
                </button>
            </div>
            <div class="col-md-12">
                <div id="resultado"></div>            
            </div>
        </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        //comparar/index
        var input = document.getElementById("txtPresupuesto");
        rangoNumerico(input);
    });
    function rangoNumerico(input){
        console.log(input.value);
        var numero = parseInt(input.value);
        var numero =  numero.toLocaleString('en-ES').replace(',','.').replace(',','.');
        $("#valorPresupuesto").text(numero);
    }
    $("#formFiltro").submit(function (event) {

        event.preventDefault();

        if($("#dropCategoria").val() != "0"){

            var parametros = $('#formFiltro').serialize();
                
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('comparar/filtro');?>",
                data: parametros,
                success: function (result) {
                    if(result != "ERROR"){

                    }
                },
                error: function (msg) {
                    alert("No se completo la solicitud");
                },
            });
        }else{
            mensajeToastr('error', '', "Seleccione una carrera", '');
        }
    });
</script>