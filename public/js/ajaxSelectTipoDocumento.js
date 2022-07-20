function llenarSelectTipoDeDocumento(){
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        requestSelectTipoDeDocumento = new XMLHttpRequest(); //crea un objeto AJAX de cualquier nombre
    } else if (window.ActiveXObject) { // IE
        requestSelectTipoDeDocumento = new ActiveXObject("Microsoft.XMLHTTP");
    } 
     
    //enviar peticion POST al controlador
    requestSelectTipoDeDocumento.open('POST', 'http://localhost/poo/src/controller/ControladorSelectTipoDocumento.php', true);
    requestSelectTipoDeDocumento.send();

    //definir funcion de respuesta del servidor
    requestSelectTipoDeDocumento.onreadystatechange = function(){
        // procesar la respuesta
        if (requestSelectTipoDeDocumento.status == 200) {
            document.getElementById("selectDocumento").innerHTML = requestSelectTipoDeDocumento.responseText;
            // perfect!
        } else {
            // hubo algún problema con la petición,
            // por ejemplo código de respuesta 404 (Archivo no encontrado)
            // o 500 (Internal Server Error)
            document.getElementById("selectDocumento").innerHTML = "";
        }                        

    };


}
//ejecuta la funcion del AJAX
llenarSelectTipoDeDocumento();