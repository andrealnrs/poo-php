//swal notificacion tipo toast
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

document.getElementById("aggDocumento").addEventListener("click", llamadoAjax);

//funcion que se ejecuta cuando se hace click
function llamadoAjax() {
    //definir el objeto ajax
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        http_request = new XMLHttpRequest();
        http_request.overrideMimeType('text/xml');
    } else if (window.ActiveXObject) { // IE
        http_request = new ActiveXObject("Microsoft.XMLHTTP");
    } 


    //definir funcion de respuesta del servidor
    http_request.onreadystatechange = resultadoCrear;
    /*(){
        // procesar la respuesta
        if (http_request.status == 200) {
            document.getElementById("resultado").innerHTML = http_request.responseText;
            llenarTablaTipoDeDocumento();
            // perfect!
        } else {
            // hubo algún problema con la petición,
            // por ejemplo código de respuesta 404 (Archivo no encontrado)
            // o 500 (Internal Server Error)
            document.getElementById("resultado").innerHTML = "Algo salio mal!";
        }                        

    };*/

    //enviar variables al servidor
    var form = document.querySelector('form');
    var data = new FormData(form);
    //crear la peticion
    http_request.open("POST", 'http://localhost/poo/src/controller/ControladorGuardar.php', true);
    http_request.send(data);

    function limpiarFormulario($id)
{
    document.getElementById($id).reset();
}

function resultadoCrear(){
    // procesar la respuesta
    if(http_request.readyState == 4){
        if (http_request.status == 200) {
            datos = JSON.parse(http_request.responseText);
            Toast.fire({
                icon: datos.icon,
                title: datos.title
            });                    
            llenarTablaTipoDeDocumento();
            limpiarFormulario('tabla');
        } else if(http_request.status != 0) {
            datos = JSON.parse(http_request.responseText);
            Toast.fire({
                icon: 'error',
                title: "error consultando el registro"
            });             
            
        }                        
    }
}
}