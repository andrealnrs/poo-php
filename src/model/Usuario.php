<?php
declare(strict_types=1);
include_once('../model/Errores.php');

class Usuario 
{
    public $id_documento    = integer;
    public $documento       = integer;
    public $primer_nombre   = string; 
    public $segundo_nombre  = string;
    public $primer_apellido = string;
    public $segudo_apellido = string;
    public $email           = string;
 
    //this is my construct method
    function __construct($_POST)
    {
        //En mi metodo constructor como parametro puse POST 
        $this->id_documento=$_POST['idDocumento'];
        $this->documento=$_POST['documento'];
        $this->primer_nombre=$_POST['primerNombre'];
        $this->segundo_nombre=$_POST['segundoNombre'];
        $this->primer_apellido=$_POST['primerApellido'];
        $this->segudo_apellido=$_POST['segundoApellido'];
        $this->email=$_POST['email'];
    }
}