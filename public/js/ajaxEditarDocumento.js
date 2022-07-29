if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    requestConsultaEditar = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE
    requestConsultaEditar = new ActiveXObject("Microsoft.XMLHTTP");
} 

requestConsultaEditar.onreadystatechange = resultadoConsultaEditar;

function activarBotonesEditar(){
    let botonesEditar = document.querySelectorAll(".editar-documento");
    for (let i = 0; i < botonesEditar.length; i++) {
            botonesEditar[i].addEventListener("click", editarRegistro);
    }
}

function editarRegistro(){
    var idRegistro = this.dataset.id_botones;

    var data = new FormData();
    data.append('id',idRegistro);

    requestConsultaEditar.open('POST', 'http://localhost/poo/src/controller/ControladorEditarDocumento.php', true);
    requestConsultaEditar.send(data);    
        
}


function resultadoConsultaEditar(){
    // procesar la respuesta
    if(requestConsultaEditar.readyState == 4){
        if (requestConsultaEditar.status == 200) {
            datos = JSON.parse(requestConsultaEditar.responseText);

            document.getElementById('id').value = datos.id;
            document.getElementById('nombreDocumento').value = datos.nombre_documento;
            location.href = "#tabla";
            
            //console.dir(datos);
        } else if(requestConsultaEditar.status != 0) {
            alert("error consultando el registro");
        }                        
    }
}