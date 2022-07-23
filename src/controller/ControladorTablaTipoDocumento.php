<?php
include_once('../model/Errores.php');

require('../model/DocumentoRepositorio.php');
require('../view/TablaTiposDeDocumentos.php');


$tabla = new DocumentoRepositorio();
$llenarTabla = $tabla->obtenerTodo();

$vistaTablita = new TablaTiposDeDocumentos();
$html = $vistaTablita->render($llenarTabla);

echo $html;