<?php
declare(strict_types=1);
include_once('../model/Errores.php');

class Usuario 
{
    public $id_documento;   
    public $documento;  
    public $primer_nombre;   
    public $segundo_nombre; 
    public $primer_apellido;
    public $segudo_apellido;
    public $email;
 
    //this is my construct method
    function __construct($post)
    {
        //En mi metodo constructor como parametro puse POST 
        $this->id_documento=$post['idDocumento'];
        $this->documento=$post['documento'];
        $this->primer_nombre=$post['primerNombre'];
        $this->segundo_nombre=$post['segundoNombre'];
        $this->primer_apellido=$post['primerApellido'];
        $this->segudo_apellido=$post['segundoApellido'];
        $this->email=$post['email'];
        //var_dump($post);
    }
}