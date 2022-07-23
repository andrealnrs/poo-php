<?php
include_once('../model/Errores.php');

require('../model/DocumentoRepositorio.php');
require('../view/VistaSelectTipoDeDocumento.php');


$docRepo = new DocumentoRepositorio();
$resultados = $docRepo->obtenerTodo();

$vista = new VistaSelectTipoDeDocumento();
$html = $vista->render($resultados);

echo $html;