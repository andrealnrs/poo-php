document.getElementById('aggDocumento').addEventListener('click', TipoDeDocumento);

function TipoDeDocumento() {
 
  if (window.XMLHttpRequest) { 
        http_request = new XMLHttpRequest();
        //http_request.overrideMimeType('text/xml');
      } else if (window.ActiveXObject) { 
        http_request = new ActiveXObject("Microsoft.XMLHTTP");
    };

    http_request.onreadystatechange = function(){
        // procesar la respuesta
        if (http_request.readyState == 4) {
            if (http_request.status == 200) {
                // perfect!
             document.getElementById('respuesta').innerHTML = alert('si');

            } else {
                // hubo algún problema con la petición,
                // por ejemplo código de respuesta 404 (Archivo no encontrado)
                // o 500 (Internal Server Error)
                
              document.getElementById('respuesta').innerHTML = alert('no') ;
            }
     }  
    };

    //var form = document.querySelector();
    //var data = new FormData(form);

    //Prueba con variables separadas
    //var data2 = `numeroA=${document.querySelector('input[name="numeroA"]').value}&numeroB=${document.querySelector('input[name="numeroB"]').value}&operacion=${document.querySelector('select[name="operacion"]').value}`;
   
    
    //crear la peticion
    http_request.open('POST', 'http://localhots:3306/C:/xampp/htdocs/poo/public/index.php', true);
    http_request.send();
}