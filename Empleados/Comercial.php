<?php
require_once("Empleado.php");
    class Comercial extends Empleado{
        
        protected $comision;

        function __construct($nombre, $edad, $salario, $comision)
        {
            parent::__construct($nombre, $edad, $salario);
            $this->setComision($comision);
        }

        public function setComision($comision)
        {
            $this->comision = $comision;
        }

        public function getComision()
        {
            return $this->comision;
        }

        public function PLUS()
        {
            if($this->getEdad() > 30 && $this->comision > 200){
                $this->salario += Empleado::PLUS;
                return true;
            }
            return false;
        }
    }


?>