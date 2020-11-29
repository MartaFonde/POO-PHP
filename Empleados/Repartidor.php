<?php
    require_once("Empleado.php");
    class Repartidor extends Empleado{
        protected $zona;

        function __construct($nombre, $edad, $salario, $zona)
        {
            parent::__construct($nombre, $edad, $salario);
            $this->setZona($zona);
        }

        public function setZona($zona)
        {
            $this->zona = $zona;
        }

        public function getZona()
        {
            return $this->zona;
        }

        public function PLUS()
        {
            if($this->edad < 25 && $this->zona == 3){
                $this->setSalario($this->salario + Empleado::PLUS);
                //print $this->getSalario();
                return true;
            }
            return false;
        }

    }


?>