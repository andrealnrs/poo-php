<?php
declare(strict_types=1);

include_once('../model/Errores.php');
include_once ('../model/UsuarioRepositorio.php');
include_once('../model/Usuario.php');


$Usu = new Usuario($_POST); //pasa los parametros que vas a solicitar solamente
$UsuarioRepositorio = new UsuarioRepositorio();
$guardarBD= $UsuarioRepositorio->guardar($doc);