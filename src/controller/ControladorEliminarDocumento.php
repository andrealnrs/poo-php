<?php
include_once('../model/Errores.php');


require('../model/DocumentoRepositorio.php');
require('../view/TablaTiposDeDocumentos.php');
include_once('../model/TipoDocumento.php');

$id = $_POST['id'];
$docRepo = new DocumentoRepositorio();
$resultado = $docRepo->eliminar($id);

if($resultado){
    $mensajes = [
        'icon'=>'success',
        'title'=>'Registro eliminado con exito'
    ];
}else{
    $mensajes = [
        'icon'=>'error',
        'title'=>'No fue posible eliminar el registro'
    ];
}
echo json_encode($mensajes);

/*
$vista = new VistaConsulta();
$html = $vista->render($resultados);
echo $html;
*/