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
$sql = "INSERT INTO fromulario.usuario (id_documento, documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido) 
VALUES ('$id_documento', '$documento', '$primer_nombre', '$segundo_nombre', '$prime_apellido', '$segundo_apellido', '$email')";
  
try{
    
    $db->prepare($sql);

    echo 'se registró el usuario exitosamente';
        
} catch(Exception $e){

    echo "La conexión ha fallado: " . $e->getMessage(); 
}
  