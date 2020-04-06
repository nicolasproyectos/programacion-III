<?php
class Moneda{

    public $nombre;
    public $codigo;
    public $simbolo;

    public function _construct($nombre,$codigo,$simbolo){
        $this->nombre = $nombre;
        $this->codigo = $codigo;
        $this->simbolo = $simbolo;
    }
}
     