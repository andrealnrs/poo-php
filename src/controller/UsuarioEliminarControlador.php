<?php
include_once('../model/Errores.php');


require('../model/UsuarioRepositorio.php');

$id = $_POST['id'];
$docRepo = new UsuarioRepositorio();
$resultado = $docRepo->eliminar($id);
//var_dump($resultado); con JSON si hago otra impreison falla 
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