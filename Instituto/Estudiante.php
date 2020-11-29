<?php
    require_once("Persona.php");

    class Estudiante extends Persona {
        protected $nota;

        function __construct($nombre, $edad, $sexo)
        {
            parent::__construct($nombre, $edad, $sexo);
            $this->setNota();
        }

        public function setNota()
        {
            // $this->nota = $nota;
            $this->nota = rand(0,10);

        }

        public function getNota()
        {
            return $this->nota;
            //return $this->nota = rand(0,10);
        }

        public function mostrar()
        {
            parent::mostrar();
            print "Nota: ".$this->getNota()."<br>";
        }
    }

?>