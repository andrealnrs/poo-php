<?php
declare(strict_types=1);

include_once('../model/Errores.php');
include_once ('../model/DocumentoRepositorio.php');
include_once('../model/TipoDocumento.php');


$doc = new TipoDocumento($_POST); //pasa los parametros que vas a solicitar solamente
$DocumentoRepositorio = new DocumentoRepositorio();
$guardarBD= $DocumentoRepositorio->guardar($doc);
 

if($guardarBD){
  $mensajes = [
      'icon'=>'success',
      'title'=>'Registro guardado con exito, resultado: '.$doc->nombre_documento
  ];
}else{
  $mensajes = [
      'icon'=>'error',
      'title'=>'No fue posible guardar el registro'
  ];
}
echo json_encode($mensajes);
