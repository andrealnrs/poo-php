<?php
include_once('db.php');
include_once('Usuario.php');


//guardando los datos del front en mis variables del back 
/*$id_documento=$_POST['idDocumento'];
$documento=$_POST['documento'];
$primer_nombre=$_POST['primerNombre'];
$segundo_nombre=$_POST['segundoNombre'];
$primer_apellido=$_POST['primerApellido'];
$segudo_apellido=$_POST['segundoApellido'];
$email=$_POST['email'];*/

//encapsular los datos del front en un objeto
$usuario = new Usuario($_POST); //lo que hice fue crear un objeto con la variable POST (revisa Usuario.php)

$db= conn();

try {
    $sql = "INSERT INTO fromulario.usuario (id_documento, documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido) 
    VALUES ('$id_documento', '$documento', '$primer_nombre', '$segundo_nombre', '$prime_apellido', '$segundo_apellido', '$email')";
    $sentencia 
} catch {

}

try {
    $sql = "INSERT INTO capacitacion.calculadora (numeroA,numeroB,operacion,resultado) 
            VALUES (:numeroA, :numeroB, :operacion, :resultado)";
    //por tema de seguridad en valores pone ese :numero        
    $sentencia = $this->bd->prepare($sql);
    $sentencia->bindParam(':numeroA', $calc->numeroA);
    $sentencia->bindParam(':numeroB', $calc->numeroB);
    $sentencia->bindParam(':operacion', $calc->operacion);
    $sentencia->bindParam(':resultado', $calc->calcular());    
    $sentencia->execute();   
    $guardo =  $sentencia->rowCount();
    return  $guardo;   
} catch(Exception $e){
    echo '<pre>'.print_r($e,true) .'</pre>';
    return  $guardo; 
    //die();            
}
  