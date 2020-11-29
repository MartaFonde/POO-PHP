<?php

    abstract class Empleado {
        protected $nombre;
        protected $edad;
        protected $salario;
        const PLUS = 300;
        
        function __construct($nombre, $edad, $salario){
            $this->setNombre($nombre);
            $this->setEdad($edad);
            $this->setSalario($salario);
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        
        public function getNombre()
        {
            return $this->nombre;
        }

        public function setEdad($edad)
        {
            $this->edad = $edad;
        }

        public function getEdad()
        {
            return $this->edad;
        }

        public function setSalario($salario)
        {
            $this->salario = $salario;
        }

        public function getSalario()
        {
            return $this->salario;
        }

        abstract function PLUS();


    }


?>