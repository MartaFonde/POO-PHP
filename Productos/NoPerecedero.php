<?php
    require_once("Producto.php");

    class NoPerecedero extends Producto {
        protected $tipo;

        function __construct($nombre, $precio, $tipo)
        {
            parent::__construct($nombre, $precio);
            $this->setTipo($tipo);
        }
        
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function calcular($cant)
        {
            return parent::calcular($cant);
        }

        public function mostrarInfo()
        {
            parent::mostrarInfo();
            print "Tipo: ".$this->tipo."<br>";
        }

    }




?>