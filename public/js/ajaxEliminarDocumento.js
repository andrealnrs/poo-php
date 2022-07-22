if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    requestConsultaEliminar = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE
    requestConsultaEliminar = new ActiveXObject("Microsoft.XMLHTTP");
} 

requestConsultaEliminar.onreadystatechange = resultadoConsultaEliminar;

function activarBotonesEliminar(){
    let botonesEditar = document.querySelectorAll(".eliminar-documento");

    for (let i = 0; i < botonesEditar.length; i++) {
            botonesEditar[i].addEventListener("click", eliminarRegistro);
    }
}

function eliminarRegistro(){
    var idRegistro = this.dataset.id_botones; //dataset es una manera de mandar datos directamente del back al front
    //alert(idRegistro); -> lo hice para saber si iba bien hasta este punto
    Swal.fire({
        title: 'Confirmar Accion?',
        text: "Seguro que deseas eliminar el documento!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!'
      }).then((result) => {
        if (result.isConfirmed) {
            var data = new FormData();
            data.append('id',idRegistro);

            requestConsultaEliminar.open('POST', 'http://localhost/poo/src/controller/ControladorEliminarDocumento.php', true);
            requestConsultaEliminar.send(data); 
        }
      })            
}

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

function resultadoConsultaEliminar(){
    // procesar la respuesta
    if(requestConsultaEliminar.readyState == 4){
        if (requestConsultaEliminar.status == 200) {
            datos = JSON.parse(requestConsultaEliminar.responseText);

            Toast.fire({
                icon: datos.icon,
                title: datos.title
            }); 
            llenarTablaTipoDeDocumento();

        } else if(requestConsultaEliminar.status != 0) {
            Toast.fire({
                icon: 'error',
                title: "error consultando el registro"
            });            
        }                        
    }

}
