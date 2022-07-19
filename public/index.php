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
    <form action="../src/model/resgistro.php" method="POST">
     <div class="card my-4 mx-4">
        <div class="card-header text-primary">
            FORMULARIO
        </div>
        <div class="card-body">
            <div class='row'>
                <div class="my-3 mx-3 col-5">
                    <label for="formGroupExampleInput2" class="form-label">Agregar tipo de documento</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="agregue nuevo tipo de documento" name="nombre_documento">
                    <button type="button" id='aggDocumento' class="btn btn-primary">Agregar</button>
                </div>
            </div>
            
            <div class="row">
                <div class="my-3 mx-3 col">
                 <label for="formGroupExampleInput2" class="form-label">Tipo de documento</label>
                    <select class="form-select" id="autoSizingSelect" name="idDocumento">
                        <option selected>seleccionar</option>
                        <option value="1">cedula de ciudadania</option>
                        <option value="2">cedula de extranjeria</option>
                        <option value="3">tarjeta de identidad</option>
                        <option value="4">pasaporte</option>
                    </select>
                </div>
                <div class="my-3 mx-3 col">
                    <label for="formGroupExampleInput2" class="form-label">Número de documento</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="numero de documento" required name="documento">
                </div>
            </div>
            <div class="row">
                <div class="my-3 mx-3 col">
                    <label for="formGroupExampleInput" class="form-label">Primer Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="primer nombre" required name="primerNombre">
                </div>
                <div class="my-3 mx-3 col">
                    <label for="formGroupExampleInput2" class="form-label">Segundo Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="segundo nombre" name="segundoNombre">
                </div>
            </div>
            <div class="row">
                <div class="my-3 mx-3 col">
                    <label for="formGroupExampleInput" class="form-label">Primer Apellido</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="primer apellido" required name="primerApellido">
                </div>
                <div class="my-3 mx-3 col">
                    <label for="formGroupExampleInput2" class="form-label">Segundo Apellido</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="segundo apelliodo" name="segundoApellido">
                </div>
            </div>           
                <div class="my-3 mx-3">
                    <label for="formGroupExampleInput2" class="form-label">Correo Electronico</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                        <input type="text" class="form-control" id="autoSizingInputGroup"
                        placeholder="Usuario123@ejemplo.com" required name="email">
                    </div>
                </div>
              <div class='row'>    
                  <div class='col-1 my-3 mx-3'>
                     <button type="submit" id='registroUsuario' class="btn btn-primary">Guardar</button>
                  </div>
              </div>

                <!--cami lo dejo vacio y le puso un div_respuesta-->
                <div class="alert alert-primary mx-2 my-2" id='respuesta' role="alert">
                    
                </div>


             
        </div>
     </div>
    </form>

 <!--tabla de usuarios-->
  <?php
   include_once('../src/view/tabla.php');
   ?>
  </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src='./js/ajaxRegistro.js'></script>
    <script src='./js/ajaxTipoDocumento.js'></script>
</body>

</html>