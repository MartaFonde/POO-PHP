<?php
    require_once("Persona.php");

    class Profesor extends Persona {
        protected $materia;        

        function __construct($nombre, $edad, $sexo, $materia)
        {
            parent::__construct($nombre, $edad, $sexo);
            $this->setMateria($materia);
        }

        public function setMateria($materia)
        {
            if(strcmp(strtoupper($materia), "FILOSOFIA") != 0 && strcmp(strtoupper($materia), "MATEMATICAS") != 0 && strcmp(strtoupper($materia), "FISICA") != 0){
                print "Error: materia de Profesor no válida<br>";
                $this->materia = "";
            }else{
                $this->materia = strtoupper($materia);            
            }
        }

        public function getMateria()
        {
            return $this->materia;
        }

        public function mostrar()
        {
            parent::mostrar();
            print "Materia: ".$this->getMateria()."<br>";
        }
    }

?>