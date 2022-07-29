<?php

include_once('../model/Errores.php');
require('../model/UsuarioRepositorio.php');
require('../view/VistaTablaUsuarios.php');

$id = $_POST['id'];
$docRepo = new UsuarioRepositorio();
$resultados = $docRepo->obtenerPorId($id);
//var_dump($resultados);

echo json_encode($resultados);