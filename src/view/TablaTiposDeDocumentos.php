<?php
declare(strict_types=1);
include_once('../model/Errores.php');

class TablaTiposDeDocumentos{

    function render($llenarTabla){
        $html = '
            <table class="table">
                <thead>
                    <tr>
                        <td><strong>Nombre documento</strong></td>
                        <td><strong>Acciones</strong></td>
                    </tr>
                </thead>
                <tbody>';

        foreach($llenarTabla as $filaTabla){
            $html.= '
            <tr>
                <td>'.$filaTabla['nombre_documento'].'</td>
                <td>
                <button type="button" data-id_botones="'.$filaTabla['id'].'" class="btn btn-danger eliminar-documento"><i class="bi bi-trash"></i></button>
                <button type="button" data-id_botones="'.$filaTabla['id'].'" class="btn btn-info editar-documento"><i class="bi bi-pencil-square"></i></button>
                </td>               
            </tr>
            ';
        }

        $html.= '</tbody>
            </table>
        
        ';
        return $html;
    }
} 

                //