<?php
class VistaSelectTipoDeDocumento{

    function render($resultados){
        $html = "";

        foreach($resultados as $fila){
            $html.= '<option value="'.$fila['id'].'">'.$fila['nombre_documento'].'</option>';
        }
        return $html;
    }
} 