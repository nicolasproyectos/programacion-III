<?php
    include "moneda.php";
    class Pais{

        public $nombre;
        public $codigo;
        public $continente;
        public $subRegion;
        public $moneda;

        public function _construct($nombre,$codigo,$continente,$subRegion,$moneda){
            $this->nombre = $nombre;
            $this->codigo = $codigo;
            $this->continente = $continente;
            $this->subRegion = $subRegion;
            $nuevaMoneda = new Moneda;
            $nuevaMoneda->_construct($moneda[0]->name,$moneda[0]->code,$moneda[0]->symbol);
            $this->moneda = $nuevaMoneda;
        }

    }
       