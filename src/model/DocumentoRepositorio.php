<?php
declare(strict_types=1);

include_once('Conexion.php')
include_once('TipoDocumento.php')
 
class DocumentoRepositorio{
    private $bd;
    private $doc;
    function __construct($doc=null) 
    {
        $this->bd   = Conexion::obtener();
        $this->doc = $doc;
    }  

    function guardar($doc)
    {
        $guardo = false;
        try{
            $sql = "INSERT INTO formulario.doc (nombre_documento) 
                    VALUES (':nombreDocumento')";
            $sentencia = $this->bd->prepare($sql);
            //$sentencia->bindParam(':idDocumento', $doc->id_documento);
            $sentencia->bindParam(':nombreDocumento', $doc->nombre_documento);   
            $sentencia->execute();   
            $guardo =  $sentencia->rowCount();
            return  $guardo;   
        }catch(Exception $e){
            echo '<pre>'.print_r($e,true) .'</pre>';
            return  $guardo; 
            //die();            
        }
    }
