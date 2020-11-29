<?php 
    abstract class Persona {
        protected $nombre;
        protected $edad;
        protected $sexo;

        function __construct($nombre, $edad, $sexo)
        {
            $this->setNombre($nombre);
            $this->setEdad($edad);
            $this->setSexo($sexo);
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

        public function setSexo($sexo)
        {
            $this->sexo = strToupper($sexo);
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function mostrar()
        {
            print "Nombre: ".$this->getNombre()."<br>";
            print "Edad: ".$this->getEdad()."<br>";
            print "Sexo: ".$this->getSexo()."<br>";
        }
    }

?>