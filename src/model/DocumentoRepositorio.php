<?php

include_once('db.php')


$documento = new Documento($_POST);
$db = conn();

try{
    $sql = "INSERT INTO formulario.documentos (nombre_documento) 
            VALUES (:nombreDocumento)";
    //por tema de seguridad en valores pone ese :numero        
    $sentencia = $this->bd->prepare($sql);
    $sentencia->bindParam(':nombreDocumento', $calc->nombreDocumento);
    $guardo =  $sentencia->rowCount();
    return  $guardo; 
} catch (Exception $e){
    echo '<pre>'.print_r($e,true) .'</pre>';
    return  $guardo; 
}
