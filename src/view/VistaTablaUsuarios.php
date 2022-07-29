<?php
declare(strict_types=1);
include_once('../model/Errores.php');

class VistaTablaUsuarios{

    function render($llenarTablaUsu){
        $html = '
            <table class="table">
                <thead>
                    <tr>
                        <td><strong>Numero documento</strong></td>
                        <td><strong>Primer Nombre</strong></td>
                        <td><strong>Segundo Nombre</strong></td>
                        <td><strong>Primer Apellido</strong></td>
                        <td><strong>Segundo Apellido</strong></td>
                        <td><strong>Email</strong></td>
                        <td><strong>Acciones</strong></td>
                    </tr>
                </thead>
                <tbody>';

        foreach($llenarTablaUsu as $filaTablaUsu){
            $html.= '
            <tr>
                <td>'.$filaTablaUsu['documento'].'</td>
                <td>'.$filaTablaUsu['primer_nombre'].'</td>
                <td>'.$filaTablaUsu['segundo_nombre'].'</td>
                <td>'.$filaTablaUsu['primer_apellido'].'</td>
                <td>'.$filaTablaUsu['segundo_apellido'].'</td>
                <td>'.$filaTablaUsu['email'].'</td>
                <td>
                <button type="button" data-id_botones="'.$filaTablaUsu['id'].'" class="btn btn-danger eliminar-usuario"><i class="bi bi-trash"></i></button>
                <button type="button" data-id_botones="'.$filaTablaUsu['id'].'" class="btn btn-info editar-usuario"><i class="bi bi-pencil-square"></i></button>
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