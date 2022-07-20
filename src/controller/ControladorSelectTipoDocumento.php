<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require('../model/Calculadora.php');
require('../model/DocumentoRepositorio.php');
require('../view/VistaSelectTipoDeDocumento.php');


$docRepo = new DocumentoRepositorio();
$resultados = $docRepo->obtenerTodo();

$vista = new VistaSelectTipoDeDocumento();
$html = $vista->render($resultados);

echo $html;