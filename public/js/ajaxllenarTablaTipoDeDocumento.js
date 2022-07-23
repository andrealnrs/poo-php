
function llenarTablaTipoDeDocumento(){
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        tablaTipoDeDocumento = new XMLHttpRequest(); //crea un objeto AJAX de cualquier nombre
    } else if (window.ActiveXObject) { // IE
        tablaTipoDeDocumento = new ActiveXObject("Microsoft.XMLHTTP");
    };
     
    //enviar peticion POST al controlador
    tablaTipoDeDocumento.open('POST', 'http://localhost/poo/src/controller/ControladorTablaTipoDocumento.php', true);
    tablaTipoDeDocumento.send();

    //definir funcion de respuesta del servidor
    tablaTipoDeDocumento.onreadystatechange = function(){
        // procesar la respuesta
        if (tablaTipoDeDocumento.status == 200) {
            document.getElementById("div_contenedorTabla").innerHTML = tablaTipoDeDocumento.responseText;
            activarBotonesEditar();
            activarBotonesEliminar();
            // perfect!
        } else {
            // hubo algún problema con la petición,
            // por ejemplo código de respuesta 404 (Archivo no encontrado)
            // o 500 (Internal Server Error)
            document.getElementById("div_contenedorTabla").innerHTML = "";
        }                        

    }


}
//ejecuta la funcion del AJAX
llenarTablaTipoDeDocumento();