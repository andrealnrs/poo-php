<?php
declare(strict_types=1);
include_once('../model/Errores.php');

class TipoDocumento {
    public $id;
    public $nombre_documento;

    function __construct($post)
    {
        $this->id=$post["Documento"];
        $this->nombre_documento=$post["nombreDocumento"];
        //var_dump($post);
    }
}
