<?php
declare(strict_types=1);
include_once('../model/Errores.php');
class VistaSelectTipoDeDocumento{

    function render($resultados){
        $html = "";

        foreach($resultados as $fila){
            $html.= '<option value="'.$fila['id'].'">'.$fila['nombre_documento'].'</option>';
        }
        return $html;
    }
} 

//lo que hace esto es una vista PERO en el select de mi formulario de usuarios, donde automaticamente se agrega la opcion del documento