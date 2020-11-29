<?php
    require_once("Producto.php");

    class Perecedero extends Producto {
        protected $diasCaducar;

        function __construct($nombre, $precio, $diasCaducar){
            parent::__construct($nombre, $precio);
            $this->setDiasCaducar($diasCaducar);
        }

        public function setDiasCaducar($diasCaducar)
        {
            $this->diasCaducar = $diasCaducar;
        }

        public function getDiasCaducar()
        {
            return $this->diasCaducar;
        }

        public function calcular($cant)
        {
            switch($this->diasCaducar){
                case 1: $this->precio = $this->precio * 0.25;
                    break;
                case 2: $this->precio = $this->precio * 0.33;
                    break;
                case 3: $this->precio = $this->precio * 0.5;
                    break;
            }
            return parent::calcular($cant);
        }

        public function mostrarInfo()
        {
            parent::mostrarInfo();
            print "Días a caducar: ".$this->diasCaducar."<br>";
        }
        
    }


?>