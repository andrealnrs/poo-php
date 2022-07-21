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
    http_request.onreadystatechange = function(){
        // procesar la respuesta
        if (http_request.status == 200) {
            document.getElementById("resultado").innerHTML = http_request.responseText;
            //refrescarTabla();
            // perfect!
        } else {
            // hubo algún problema con la petición,
            // por ejemplo código de respuesta 404 (Archivo no encontrado)
            // o 500 (Internal Server Error)
            document.getElementById("resultado").innerHTML = "Algo salio mal!";
        }                        

    };

    //enviar variables al servidor
    var form = document.querySelector('form');
    var data = new FormData(form);
    //Prueba con variables separadas
    //var data2 = `numeroA=${document.querySelector('input[name="numeroA"]').value}&numeroB=${document.querySelector('input[name="numeroB"]').value}&operacion=${document.querySelector('select[name="operacion"]').value}`;
    //console.log(data2);
    //crear la peticion
    http_request.open("POST", 'http://localhost/poo/src/controller/ControladorGuardar.php', true);
    http_request.send(data);
}