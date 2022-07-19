<?php
declare(strict_types=1);

class Conexion {

   static function obtener()
   {
      $servidor = 'localhost';
      $usuario = 'root';
      $password = '';
      $dbname = 'formulario';
      $conection = null;

      try {
          $conection = new PDO ("mysql:host=$servidor;$dbname", $usuario, $password);
          $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo "Conexión realizada Satisfactoriamente";   
      }

  
      catch(PDOException $e)
      { 
        echo "La conexión ha fallado: " . $e->getMessage();
      }

      
      return $conection;
   }
}
