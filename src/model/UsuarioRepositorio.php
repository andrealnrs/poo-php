<?php
declare(strict_types=1);
include_once('../model/Errores.php');
include_once('Conexion.php');
include_once('Usuario.php');

class UsuarioRepositorio{
    private $con;
    private $usu;
    function __construct($usu=null) 
    {
        $this->con   = Conexion::obtener();
        $this->usu = $usu;
    }  
    
    function guardar($doc) : bool
    try {
        $sql = "INSERT INTO fromulario.usuario(
                documento, 
                primer_nombre,
                segundo_nombre, 
                primer_apellido, 
                segundo_apellido,
                email)
                VALUES(
                :documento
                :primerNombre, 
                :segundoNombre, 
                :primerApellido, 
                :segundoApellido,
                :email)";
        //por tema de seguridad en valores pone ese :numero        
        $sentencia = $this->bd->prepare($sql);
        $sentencia->bindParam(':documento', $usu->documento);
        $sentencia->bindParam(':primerNombre', $usu->primer_nombre);
        $sentencia->bindParam(':segundoNombre', $usu->segundo_nombre);
        $sentencia->bindParam(':primerApellido', $usu->primer_apellido);
        $sentencia->bindParam(':segundoApellido', $usu->segundo_apellido);
        $sentencia->bindParam(':primerApellido', $usu->email);    
        $sentencia->execute();   
        $guardo =  $sentencia->rowCount();
        return  $guardo;   
    } catch(Exception $e){
        echo '<pre>'.print_r($e,true) .'</pre>';
        return  $guardo; 
        //die();            
    }
} 