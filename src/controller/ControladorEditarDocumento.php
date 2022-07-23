<?php

include_once('../model/Errores.php');
require('../model/DocumentoRepositorio.php');
require('../view/TablaTiposDeDocumentos.php');

$id = $_POST['id'];
$docRepo = new DocumentoRepositorio();
$resultados = $docRepo->obtenerPorId($id);
//var_dump($resultados);

echo json_encode($resultados);