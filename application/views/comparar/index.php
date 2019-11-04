<div id="divFiltro" class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary" onclick="panelToggle();"><span class="text-white">SELECCIONAR</span>
            </div>
            <div id="panel" class="card-body">
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
                            <label for="txtPresupuestoMin">Valor Minimo: <span id="spantxtPresupuestoMin"></span></label>
                            <input id="txtPresupuestoMin" name="txtPresupuestoMin" type="range" min="300000" max="20000000"
                                step="150000" value="2500000" class="form-control" onchange="rangoNumerico('txtPresupuestoMin')">
                        </div>
                        <div class="col-md-3">
                            <label for="txtPresupuestoMax">Valor Maximo: <span id="spantxtPresupuestoMax"></span></label>
                            <input id="txtPresupuestoMax" name="txtPresupuestoMax" type="range" min="300000" max="20000000"
                                step="150000" value="2500000" class="form-control" onchange="rangoNumerico('txtPresupuestoMax')">
                        </div>
                        <div class="col-md-3">
                            <button id="btnEnviar" type="submit" class="btn btn-primary btnMargin">
                                Continuar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<div id="divComparar" class="row nodisplay">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form id="formComparar" Method="POST">
                    <button id="btnEnviar" type="submit" class="btn btn-success float-right">
                        Comparar
                    </button>
                    <div id="divResultado" class="row">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="divCompararResult" class="nodisplay">
    <div id="divResultCarreras" class="row">

    </div>
</div>
<script>
$(document).ready(function() {
    //comparar/index
    rangoNumerico('txtPresupuestoMin');
    rangoNumerico('txtPresupuestoMax');
});
function panelToggle() {
    $("#panel").toggle(200);
}
function rangoNumerico(input) {
    var valor = $("#" + input).val();
    var numero = parseInt(valor);
    var numero = numero.toLocaleString('en-ES').replace(',', '.').replace(',', '.');
    $("#span" + input).text(numero);
}
function seleccionar(div){
    if($(div).hasClass("seleccion")){
        $(div).removeClass("seleccion");
    }else{
        $(div).addClass("seleccion");
    }
}
$("#formFiltro").submit(function(event) {

    event.preventDefault();

    if ($("#dropCategoria").val() != "0") {

        var parametros = $('#formFiltro').serialize();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('comparar/filtro');?>",
            data: parametros,
            success: function(result) {
                if (result != "ERROR") {
                    if ($("#panel").is(':visible')) {
                        panelToggle(400);
                    }
                    $("#divComparar").show(400);
                    var ca = "";
                    var listUni = JSON.parse(result);
                    if(listUni != null && listUni.length > 0){
                        for (let i = 0; i < listUni.length; i++) {

                            ca +="<div class='col-md-4'>";
                            ca +="    <div onclick='seleccionar(this);' id='" + listUni[i].codcarrera + "' class='card ucard'>";
                            ca +="        <div class='card-header'>";
                            ca +="           " + listUni[i].razonsocial.toUpperCase() + " ";
                            ca +="        </div>";
                            ca +="        <div class='card-body'>";
                            ca +="            <h5 class='card-title'>SNIES : " + listUni[i].snies.toUpperCase() + "</h5>";
                            ca +="            <p class='card-text text-justify'>";
                            ca +="             " + cortarCadena(listUni[i].descripcion,150) + " ";
                            ca +="            </p>";
                            ca +="            <br>";
                            ca +="            <a href='https://" + listUni[i].url + "' target='_blank'>Visitar Sitio</a>";
                            ca +="        </div>";
                            ca +="    </div>";
                            ca +="</div>";                    
                        }
                        $('#divResultado').html(ca);
                    }
                }
            },
            error: function(msg) {
                alert("No se completo la solicitud");
            },
        });
    } else {
        mensajeToastr('error', '', "Seleccione una carrera", '');
    }
});

$("#formComparar").submit(function(event) {

    event.preventDefault();

    var listaComparar = Array();
    $(".seleccion").each(function(index) {
        listaComparar.push({id:$(this).attr('id')});
    });

    if (listaComparar != null && listaComparar.length > 1) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('comparar/comparar');?>",
            data:{'listaComparar':JSON.stringify(listaComparar)},
            success: function(result) {
                if (result != "ERROR") {
                    $("#divFiltro").hide();
                    $("#divComparar").hide();
                    var ca = "";
                    var col = "";
                    var listCar = JSON.parse(result);
                    console.log(listCar);
                    switch (listCar.length) {
                        case 2:
                            col = "col-md-6";
                            break;
                        case 3:
                            col = "col-md-4";
                            break;
                        case 4:
                            col = "col-md-3";
                            break;
                    }
                    if(listCar != null && listCar.length > 0){
                        for (let i = 0; i < listCar.length; i++) {

                            ca +="<div class='" + col + "'>";
                            ca +="<div class='card'>";
                            ca +="    <div class='card-body minalto'>";
                            ca +="        <h5 class='card-title'>" + listCar[i].nombre + "</h5>";
                            ca +="        <h5 class='card-subtitle mb-2 text-muted'>Perfil Ocupacional</h5>";
                            ca +="        <p class='card-text text-justify'>" + listCar[i].perfilocupacional + "</p>";
                            ca +="    </div>";
                            ca +="    <ul class='list-group list-group-flush'>";
                            ca +="        <li class='list-group-item'><strong>TITULO:</strong> " + listCar[i].titulo + "</li>";
                            ca +="        <li class='list-group-item'><strong>ACREDITACIÓN:</strong> " + (listCar[i].acreditacion == "1" ? "Acreditada":"No acreditada") + "</li>";
                            ca +="        <li class='list-group-item'><strong>MODALIDAD:</strong> " + listCar[i].tipomodalidad + "</li>";
                            ca +="        <li class='list-group-item'><strong>FORMACIÓN:</strong> " + listCar[i].tipoformacion + "</li>";
                            ca +="        <li class='list-group-item'><strong>SEMESTRE:</strong> " + listCar[i].duracion + "</li>";
                            ca +="    </ul>";
                            ca +="    <div class='card-body'>";
                            ca +="        <a href='#' class='card-link'>Me interesa</a>";
                            ca +="        <a href='#' class='card-link'>Ver Plan de Estudio</a>";
                            ca +="    </div>";
                            ca +="</div>";
                            ca +="</div>";     
                        }
                        $('#divResultCarreras').html(ca);
                        $("#divCompararResult").show(400);
                    }
                }
            },
            error: function(msg) {
                alert("No se completo la solicitud");
            },
        });
    } else {
        mensajeToastr('error', '', "Debe seleccionar por lo menos dos Universidades", '');
    }
});
</script>