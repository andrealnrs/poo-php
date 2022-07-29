<?php
declare(strict_types=1);
include_once('Errores.php');
include_once('Conexion.php');
include_once('Usuario.php');
 
class UsuarioRepositorio{
    private $bd;
    private $usu;
    function __construct($usu=null) 
    {
        $this->bd   = Conexion::obtener();
        $this->usu = $usu;
    }  
    
    function guardar($usu)
    {
        if($usu->id != null){
            return $this->editar($usu);
        }else{
            return $this->crear($usu);
        }
    }
    //me guarda en la base de datos
    function crear($usu) : bool
    {
        $guardo = false;
        try{
            $sql = "INSERT INTO formulario.usuario(
                documento,
                id_documento, 
                primer_nombre,
                segundo_nombre, 
                primer_apellido, 
                segundo_apellido,
                email)
                VALUES(
                :documento,
                :id_documento,
                :primerNombre, 
                :segundoNombre, 
                :primerApellido, 
                :segundoApellido,
                :email)";
               $sentencia = $this->bd->prepare($sql);
               $sentencia->bindParam(':documento', $usu->documento);
               $sentencia->bindParam(':id_documento', $usu->id_documento);
               $sentencia->bindParam(':primerNombre', $usu->primer_nombre);
               $sentencia->bindParam(':segundoNombre', $usu->segundo_nombre);
               $sentencia->bindParam(':primerApellido', $usu->primer_apellido);
               $sentencia->bindParam(':segundoApellido', $usu->segundo_apellido);
               $sentencia->bindParam(':email', $usu->email);    
               $sentencia->execute();   
               $guardo = boolval ($sentencia->rowCount());
               return  $guardo;   
           } catch(Exception $e){
               echo '<pre>'.print_r($e,true) .'</pre>';
               return  $guardo; 
               //die();            
           }
    }
    
    //me llena el select de usuarios
    function obtenerTodo()
    {
        $resultados = [];
        try{
            $sql = "SELECT * FROM formulario.usuario";
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
    //me llena la tabla
    function llenarTablaUsuario()
    {
        $llenarTablaUsu = [];
        try{
            $sql = "SELECT * FROM formulario.usuario";
            $tabla = $this->bd->prepare($sql);  
            $tabla->execute();   
            $llenarTablaUsu =  $tabla->fetchAll(PDO::FETCH_ASSOC); //es un arreglo de registros de base de datos
            return  $llenarTablaUsu;   
        }catch(Exception $e){
            echo '<pre>'.print_r($e,true) .'</pre>';
            return  $llenarTablaUsu; 
            //die();            
        }        
    }
   
    //me elimina datos de la tabla
    function eliminar($id)
    {
        $guardo = false;
        try{
            $sql = "DELETE FROM formulario.usuario WHERE id = :id";
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
    //me edita la tabla
    function editar($usu)
    {
        $guardo = false;
        try{
            $sql = "UPDATE formulario.usuario
                    SET documento=:documento, 
                        primer_nombre=:primerNombre,
                        segundo_nombre=:segundoNombre, 
                        primer_apellido=:primerApellido, 
                        segundo_apellido=:segundoApellido,
                        email=:email
                        WHERE id = :id;";
            $editar = $this->bd->prepare($sql);
            $editar->bindParam(':documento', $usu->documento);
            $editar->bindParam(':primerNombre', $usu->primer_nombre);
            $editar->bindParam(':segundoNombre', $usu->segundo_nombre);
            $editar->bindParam(':primerApellido', $usu->primer_apellido);
            $editar->bindParam(':segundoApellido', $usu->segundo_apellido);
            $editar->bindParam(':email', $usu->email);
            $editar->bindParam(':id', $usu->id);
            $editar->execute();   
            $guardo =  $editar->rowCount();
            return  $guardo;   
        }catch(Exception $e){
            //echo '<pre>'.print_r($e,true) .'</pre>';
            return  $guardo; 
            //die();            
        }
    } 
    //me obtiene los datos para editar por el id
    function obtenerPorId($id)
    {
        $resultadosId = [];
        try{
            $sql = "SELECT * FROM formulario.usuario WHERE id = :id";
            $editarId = $this->bd->prepare($sql);  
            $editarId->bindParam(':id',$id);
            $editarId->execute();   
            $resultadosId =  $editarId->fetch(PDO::FETCH_ASSOC);
            return  $resultadosId;   
        }catch(Exception $e){
            //echo '<pre>'.print_r($e,true) .'</pre>';
            return  $resultadosId; 
            //die();            
        }        
    } 

}














/*<?php
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
} */