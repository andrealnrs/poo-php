<?php
declare(strict_types=1);

class TipoDocumento {
    public $id_documento;
    public $nombre_documento;

    function __construct($post)
    {
        $this->id=$post["Documento"];
        $this->nombre_documento=$post["nombreDocumento"];
        //var_dump($post);
    }
}
