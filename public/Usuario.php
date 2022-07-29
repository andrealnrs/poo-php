<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
    

</head>

<body>
    
    <!--tabla de formulario para usuarios-->
    <form id='tabla'>
     <div class="card my-4 mx-4">
        <div class="card-header text-primary">
            FORMULARIO REGISTRO DE USUARIOS
        </div>
        <div class="card-body"> 
            <div class="row">
                <div class="my-3 mx-3 col">
                 <label for="formGroupExampleInput2" class="form-label">Tipo de documento</label>
                    <select class="form-select" id="id_documento" name="id_documento">
                    </select>
                </div>
                <div class="col-auto">
                    <input type="hidden" name="id" id="id">
                </div>
                <div class="my-3 mx-3 col">
                    <label for="documento" class="form-label">Número de documento</label>
                    <input type="text" class="form-control" id="documento"
                    placeholder="numero de documento" required name="documento">
                </div>
            </div>
            <div class="row">
                <div class="my-3 mx-3 col">
                    <label for="primerNombre" class="form-label">Primer Nombre</label>
                    <input type="text" class="form-control" id="primerNombre"
                    placeholder="primer nombre" required name="primerNombre">
                </div>
                <div class="my-3 mx-3 col">
                    <label for="segundoNombre" class="form-label">Segundo Nombre</label>
                    <input type="text" class="form-control" id="segundoNombre"
                    placeholder="segundo nombre" name="segundoNombre">
                </div>
            </div>
            <div class="row">
                <div class="my-3 mx-3 col">
                    <label for="primerApellido" class="form-label">Primer Apellido</label>
                    <input type="text" class="form-control" id="primerApellido"
                    placeholder="primer apellido" required name="primerApellido">
                </div>
                <div class="my-3 mx-3 col">
                    <label for="segundoApellido" class="form-label">Segundo Apellido</label>
                    <input type="text" class="form-control" id="segundoApellido"
                    placeholder="segundo apelliodo" name="segundoApellido">
                </div>
            </div>           
                <div class="my-3 mx-3">
                    <label for="email" class="form-label">Correo Electronico</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                        <input type="text" class="form-control" id="email"
                        placeholder="Usuario123@ejemplo.com" required name="email">
                    </div>
                </div>
              <div class='row'>    
                  <div class='col-1 my-3 mx-3'>
                     <button type="button" id='registroUsuario' class="btn btn-primary">Guardar</button>
                  </div>
              </div>

                <!--cami lo dejo vacio y le puso un div_respuesta-->
                <div class="alert alert-primary mx-2 my-2" id='respuesta' role="alert">
                    
                </div>      
        </div>
     </div>
    </form>

    <div class="card p-2 m-2">
        <div class="card-title">
            <h5>Usuarios Registrados</h5>
        </div>
        <div class="card-body"> 
            <div id="div_contenedorTablaUsuario"></div>
        </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="./js/ajaxSelectTipoDocumento.js"></script>
    <script src="./js/usuarioAjaxGuardar.js"></script>
    <script src="./js/usuarioAjaxTabla.js"></script>
    <script src="./js/usuarioAjaxEditar.js"></script>
    <script src="./js/usuarioAjaxEliminar.js"></script>
</body>

</html>