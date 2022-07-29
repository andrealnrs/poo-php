function llenarTablaUsuario(){
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        tablaUsuario = new XMLHttpRequest(); //crea un objeto AJAX de cualquier nombre
    } else if (window.ActiveXObject) { // IE
        tablaUsuario = new ActiveXObject("Microsoft.XMLHTTP");
    };
     
    //enviar peticion POST al controlador
    tablaUsuario.open('POST', 'http://localhost/poo/src/controller/UsuarioTablaControlador.php', true);
    tablaUsuario.send();

    //definir funcion de respuesta del servidor
    tablaUsuario.onreadystatechange = function(){
        // procesar la respuesta
        if (tablaUsuario.status == 200) {
            document.getElementById("div_contenedorTablaUsuario").innerHTML = tablaUsuario.responseText;
            activarBotonesEditar();
            activarBotonesEliminar();
            // perfect!
        } else {
            // hubo algún problema con la petición,
            // por ejemplo código de respuesta 404 (Archivo no encontrado)
            // o 500 (Internal Server Error)
            document.getElementById("div_contenedorTablaUsuario").innerHTML = "";
        }                        

    }


}
//ejecuta la funcion del AJAX
llenarTablaUsuario();