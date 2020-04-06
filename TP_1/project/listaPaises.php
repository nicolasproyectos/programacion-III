<?php
    require  '/opt/lampp/htdocs/clase/TP_1/vendor/autoload.php';
    include "ipaises.php";
    include "pais.php";
    use NNV\RestCountries;

    class ListaPaises implements IPaises{
        private $paises;
        private $cantidad;
        private $restCountries;

        public function _construct(){
            $this->cantidad = 0;
            $this->restCountries = new RestCountries;
            $totalPaises = $this->restCountries->all();

            foreach($totalPaises as $valor){
                $nuevoPais = new Pais;
                $nuevoPais->_construct($valor->name,$valor->alpha3Code,$valor->region,$valor->subregion,$valor->currencies);
                $this->paises[$this->cantidad] = $nuevoPais;
                $this->cantidad++;
            }
        }

        public function MostrarTodos(){
            return $this->paises;
        }
        public function MostrarPorNombre($nombre){
            $index = 0;
            $retorno = null;

            foreach($this->paises as $valor){
                if($valor->nombre == $nombre){
                    $retorno[$index] = $valor;
                    $index++;
                }
            }
            return $retorno;
        }
        public function MostrarPorCapital($capital){
            $index = 0;
            $retorno = null;

            foreach($this->paises as $valor){
                if($valor->capital == $capital){
                    $retorno[$index] = $valor;
                    $index++;
                }
            }
            return $retorno;
        }
        public function MostrarPorContinente($region){
            $index = 0;
            $retorno = null;

            foreach($this->paises as $valor){
                if($valor->continente == $region){
                    $retorno[$index] = $valor;
                    $index++;
                }
            }
            return $retorno;
        }
        
        public function MostrarPorSubRegion($subRegion){
            $index = 0;
            $retorno = null;

            foreach($this->paises as $valor){
                if($valor->subRegion == $subRegion){
                    $retorno[$index] = $valor;
                    $index++;
                }
            }
            return $retorno;
        }
    }