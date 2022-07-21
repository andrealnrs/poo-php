<?php
declare(strict_types=1);
include_once('../model/Errores.php');
include_once('Conexion.php');
include_once('TipoDocumento.php');
 
class DocumentoRepositorio{
    private $bd;
    private $doc;
    function __construct($doc=null) 
    {
        $this->bd   = Conexion::obtener();
        $this->doc = $doc;
    }  

    function guardar($doc) : bool
    {
        $guardo = false;
        try{
            $sql = "INSERT INTO formulario.documentos (nombre_documento) 
                    VALUES (:nombreDocumento)";
            $sentencia = $this->bd->prepare($sql);
            //$sentencia->bindParam(':idDocumento', $doc->id_documento);
            $sentencia->bindParam(':nombreDocumento', $doc->nombre_documento);  
            $sentencia->execute();   
            $guardo =  boolval ($sentencia->rowCount()); //ese entero lo estoy convirtiendo cast en booleano
            return  $guardo;   
        } catch(Exception $e){
            return  $guardo; 
        }
    }
    
    
    function obtenerTodo()
    {
        $resultados = [];
        try{
            $sql = "SELECT * FROM formulario.documentos";
            $sentencia = $this->bd->prepare($sql);  
            $sentencia->execute();   
            $resultados =  $sentencia->fetchAll(PDO::FETCH_ASSOC); //es un arreglo de registros de base de datos
            return  $resultados;   
        }catch(Exception $e){
            echo '<pre>'.print_r($e,true) .'</pre>';
            return  $resultados; 
            //die();            
        }        
    }

    function llenarTablaDocumento()
    {
        $llenarTabla = [];
        try{
            $sql = "SELECT * FROM formulario.documentos";
            $tabla = $this->bd->prepare($sql);  
            $tabla->execute();   
            $llenarTabla =  $tabla->fetchAll(PDO::FETCH_ASSOC); //es un arreglo de registros de base de datos
            return  $llenarTabla;   
        }catch(Exception $e){
            echo '<pre>'.print_r($e,true) .'</pre>';
            return  $llenarTabla; 
            //die();            
        }        
    }


    //LOREN ANDREA ESTAS HACIENDO LO QUE EJECUTA ESTA FUNCIÓN
    function eliminar($id)
    {
        $guardo = false;
        try{
            $sql = "DELETE FROM formulario.documentos WHERE id = :id";
            $quitar = $this->bd->prepare($sql);  
            $quitar->bindParam(':id', $id);
            $quitar->execute();   
            $guardo =  $quitar->rowCount();
            return $guardo;  
        }catch(Exception $e){
            echo '<pre>'.print_r($e,true) .'</pre>';
            return $guardo;
            //die();            
        }        
    }    


}