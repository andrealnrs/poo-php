<?php
declare(strict_types=1);

class TipoDocumento {
    public $id_documento;
    public $nombre_documento;

    function __construc($post)
    {
        $this->id=$post["idDocumento"];
        $this->nombre_documento=$post["nombreDocumento"];
        
    }
}
