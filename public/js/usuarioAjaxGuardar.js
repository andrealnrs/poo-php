document.getElementById("registroUsuario").addEventListener("click", guardarConAjx);

function guardarConAjx() {
    //definir el objeto ajax
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        http_request = new XMLHttpRequest();
        http_request.overrideMimeType('text/xml');
    } else if (window.ActiveXObject) { // IE
        http_request = new ActiveXObject("Microsoft.XMLHTTP");
    }

    //definir funcion de respuesta del servidor
    http_request.onreadystatechange = resultadoCrear()
    {
        // procesar la respuesta
        if (http_request.status == 200) {
            document.getElementById("respuesta").innerHTML = http_request.responseText;
            llenarTablaTipoDeDocumento();
            // perfect!
        } else {
            // hubo algún problema con la petición,
            // por ejemplo código de respuesta 404 (Archivo no encontrado)
            // o 500 (Internal Server Error)
            document.getElementById("respuesta").innerHTML = "Algo salio mal!";
                         
     }
    }

    //enviar variables al servidor
    var form = document.querySelector('form');
    var data = new FormData(form);
    //crear la peticion
    http_request.open("POST", 'http://localhost/poo/src/controller/UsuarioGuardarControlador.php', true);
    http_request.send(data);
}