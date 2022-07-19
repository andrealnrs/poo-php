<?php
declare(strict_types=1);

class TipoDocumento {
    public $id_documento = integer;
    public $nombre_documento = string;

    function __construc($_POST)
    {
        $this->id=$_POST['idDocumento'];
        $this->nombre_documento=$_POST['nombreDocumento'];
    }

}