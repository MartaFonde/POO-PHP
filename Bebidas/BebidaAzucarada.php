<?php
    require_once("Bebida.php");

    class BebidaAzucarada extends Bebida{
        protected $azucar;
        protected $promocion;

        function __construct($id, $marca, $precio, $litros, $azucar, $promocion)
        {
            parent::__construct($id, $marca, $precio, $litros, $azucar, $promocion);
            $this->setAzucar($azucar);
            $this->setPromocion($promocion);
        }

        public function setAzucar($azucar)
        {
            $this->azucar = $azucar;
        }

        public function getAzucar()
        {
            return $this->azucar;
        }

        public function setPromocion($promocion)
        {
            $this->promocion = $promocion;
            if($this->promocion){
                $this->precio = 0.9*$this->precio;
            }
        }

        public function getPromocion()
        {
            return $this->promocion;
        }

        public function info()
        {
            parent::info();
            print "Porcentaje azúcar: ".$this->azucar."<br>";
            print "Promoción: ".$this->promocion."<br>";
        }
    }


?>