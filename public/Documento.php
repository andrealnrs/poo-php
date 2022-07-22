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
    
    <form action='../src/controller/ControladorGuardar.php' method="POST">
        <div class="card my-3 mx-3">
            <div class='card-header text-danger'>
              TIPO DE DOCUMENTO
            </div>
            <div class='card-body'>
                <div class="col-auto">
                    <input type="hidden" name="Documento">
                </div>
                <div class="col-4">
                    <label for="formGroupExampleInput2" class="form-label">Tipo de documento</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="inserte tipo de documento" name="nombreDocumento">
                </div>
                <div class="col-auto my-3">
                    <button type="button" class="btn btn-primary mb-3" id="aggDocumento">Guardar</button>
                </div>

                <div class="alert alert-primary mx-2 my-2" id='resultado' role="alert">
                    
                </div>
    
            </div>
            
        </div>
    </form>
   <!--tabla tipos de documento-->
    <div class="card p-2 m-2">
        <div class="card-title">
            <h5>Tipos de documentos</h5>
        </div>
        <div class="card-body"> 
            <div id="div_contenedorTabla"></div>
        </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
   <script src="./js/ajaxllenarTablaTipoDeDocumento.js"></script>
   <script src="./js/ajaxTipoDocumento.js"></script>
   <script src="./js/ajaxEliminarDocumento.js"></script>
</body>

</html>