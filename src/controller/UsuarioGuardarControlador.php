<?php
declare(strict_types=1);

include_once('../model/Errores.php');
include_once ('../model/UsuarioRepositorio.php');
include_once('../model/Usuario.php');


$usu = new Usuario($_POST); //pasa los parametros que vas a solicitar solamente
$UsuarioRepositorio = new UsuarioRepositorio();
$guardarBD= $UsuarioRepositorio->guardar($usu);
 

if($guardarBD){
  $mensajes = [
      'icon'=>'success',
      'title'=>'Registro guardado con exito, resultado: '.$usu->documento,
  ];
}else{
  $mensajes = [
      'icon'=>'error',
      'title'=>'No fue posible guardar el registro'
  ];
}
echo json_encode($mensajes);