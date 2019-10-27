function validarLogin(){
    var usuariologin = localStorage.getItem('usuario');
    if(usuariologin != null && usuariologin != ""){
        let usuario = JSON.parse(usuariologin);
        if(usuario[0].cod != null){
            return true;
        }
    }
    return false;
}
function cerrarSession(){
    localStorage.removeItem("usuario");
    location.reload(true);
}
function obtenerUsuario(){
    var usuariologin = localStorage.getItem('usuario');
    if(usuariologin != null && usuariologin != ""){
        let usuario = JSON.parse(usuariologin);
        if(usuario[0].cod != null){
            return usuario;
        }
    }
    return null;
}
function cortarCadena(cadena, cantidad){
    if(cadena.length > parseInt(cantidad)){
        return cadena.substr(0,parseInt(cantidad)) + "...";
    }
    return cadena;
}
function mensajeToastr(tipo, titulo, mensaje, tiempoDuracion, posicion) {
    $(document).ready(function () {

        var toastCount = 0;
        var $toastlast;

        var shortCutFunction = tipo; //success, info, error, warning
        var msg = mensaje;
        var title = titulo || '';
        var $showDuration = 2000;
        var $hideDuration = 2000;
        var $timeOut = (tiempoDuracion == 0) ? 2500 : tiempoDuracion;
        var $extendedTimeOut = 2000;
        var $showEasing = "swing";
        var $hideEasing = "linear";
        var $showMethod = "fadeIn";
        var $hideMethod = "fadeOut";
        var toastIndex = toastCount++;

        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: (posicion != "") ? posicion : 'toast-top-right', //toast-top-right,  toast-bottom-right, toast-bottom-left, 
            preventDuplicates: false
        };

        if ($showDuration.length) {
            toastr.options.showDuration = $showDuration;
        }

        if ($hideDuration.length) {
            toastr.options.hideDuration = $hideDuration;
        }

        if ($timeOut.length) {
            toastr.options.timeOut = addClear ? 0 : $timeOut;
        }

        if ($extendedTimeOut.length) {
            toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut;
        }

        if ($showEasing.length) {
            toastr.options.showEasing = $showEasing;
        }

        if ($hideEasing.length) {
            toastr.options.hideEasing = $hideEasing;
        }

        if ($showMethod.length) {
            toastr.options.showMethod = $showMethod;
        }

        if ($hideMethod.length) {
            toastr.options.hideMethod = $hideMethod;
        }

        if (!msg) {
            //msg = getMessage();
        }

        var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
        $toastlast = $toast;

        if (typeof $toast === 'undefined') {
            return;
        }
    });
}
