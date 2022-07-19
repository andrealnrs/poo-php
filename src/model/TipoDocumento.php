<?php

class TipoDocumento {
    public $id = integer;
    public $nombre_documento = string;

    function __construc($_POST)
    {
        $this->id=$_POST['idDocumento'];
        $this->nombre_documento=$_POST['nombreDocumento'];
    }

}