<?php
include_once('../model/Errores.php');

require('../model/UsuarioRepositorio.php');
require('../view/VistaTablaUsuarios.php');


$tabla = new UsuarioRepositorio();
$llenarTablaUsu = $tabla->obtenerTodo();

$vistaTablita = new VistaTablaUsuarios();
$html = $vistaTablita->render($llenarTablaUsu);

echo $html;