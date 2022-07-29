if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    requestEditarUsu = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE
    requestEditarUsu = new ActiveXObject("Microsoft.XMLHTTP");
} 

requestEditarUsu.onreadystatechange = resultadoConsultaEditar;

function activarBotonesEditar(){
    let botonesEditar = document.querySelectorAll(".editar-usuario");
    for (let i = 0; i < botonesEditar.length; i++) {
            botonesEditar[i].addEventListener("click", editarRegistroUsu);
    }
}

function editarRegistroUsu(){
    var idRegistro = this.dataset.id_botones;

    var data = new FormData();
    data.append('id',idRegistro);

    requestEditarUsu.open('POST', 'http://localhost/poo/src/controller/UsuarioEditarControlador.php', true);
    requestEditarUsu.send(data);    
        
}


function resultadoConsultaEditar(){
    // procesar la respuesta
    if(requestEditarUsu.readyState == 4){
        if (requestEditarUsu.status == 200) {
            datos = JSON.parse(requestEditarUsu.responseText);

            document.getElementById('id').value = datos.id;
            document.getElementById('id_documento').value = datos.id_documento;
            document.getElementById('documento').value = datos.documento;
            document.getElementById('primerNombre').value = datos.primer_nombre;
            document.getElementById('segundoNombre').value = datos.segundo_nombre;
            document.getElementById('primerApellido').value = datos.primer_apellido;
            document.getElementById('segundoApellido').value = datos.segundo_apellido;
            document.getElementById('email').value = datos.email;
            location.href = "#tabla";
            
            //console.dir(data);
        } else if(requestEditar.status != 0) {
            alert("error consultando el registro");
        }                        
    }
}