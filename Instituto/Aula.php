<?php
    require_once("Estudiante.php");
    require_once("Profesor.php");

    class Aula {
        protected $personas = array();
        protected $id;
        protected $materia;
        const CAPACIDAD = 7;

        function __construct($id, $materia)
        {            
            $this->setId($id);
            $this->setMateria($materia);
        }

        public function setId($id)
        {
            if(is_numeric($id)){
                $this->id = $id;
            }else{
                print "Error: ID no numérico<br>";
                $this->id = -1;
            }
        }

        public function getId()
        {
            return $this->id;
        }

        public function setMateria($materia)
        {
            if(strcmp(strtoupper($materia), "FILOSOFIA") != 0 && strcmp(strtoupper($materia), "MATEMATICAS") != 0 && strcmp(strtoupper($materia), "FISICA") != 0){
                print "Error: materia de Aula no válida<br>";
                $this->materia = "";
            }else{
                $this->materia = strtoupper($materia);            
            }
        }

        public function getMateria()
        {
            return $this->materia;
        }

        public function hayClase()
        {
            $requisitos = 0;
            $numAlumnos = 0;
            $numProfesores = 0;
            for ($i=0; $i < self::CAPACIDAD; $i++) { 
                if(!empty($this->personas[$i])){
                    if($this->personas[$i] instanceof Profesor){
                        $requisitos++;
                        $numProfesores++;
                        if(strcmp($this->personas[$i]->getMateria(), $this->getMateria()) == 0){
                            $requisitos++;
                        } else {
                            return false;
                        }
                    }else{
                        $numAlumnos++;
                    }
                }
            }
            if($requisitos == 2 && $numAlumnos > self::CAPACIDAD / 2 && $numProfesores == 1){                
                return true;
            }else{
                return false;
            }
        }

        public function mostrarAprobados()
        {
            $numAlumnos = 0;
            $numAlumnas = 0;
            if($this->hayClase()){
                for ($i=0; $i < self::CAPACIDAD; $i++) { 
                    if(!empty($this->personas[$i])){
                        if(strcmp(get_class($this->personas[$i]),"Estudiante") == 0){
                            if($this->personas[$i]->getNota()>=5){
                                if(strcmp($this->personas[$i]->getSexo(), "M") == 0){
                                    $numAlumnas++;
                                }else 
                                {
                                    $numAlumnos++;
                                }
                            }
                        }
                    }
                }
                print "Número de alumnas aprobadas: ".$numAlumnas."<br>";
                print "Número de alumnos aprobados: ".$numAlumnos."<br>";
            }else{
                print "No hay clase<br>";
            }
        }

        public function mostrarDatos()
        {
            print "ID Aula: ".$this->getId()."<br>";
            print "Materia Aula: ".$this->getMateria()."<br>";
            for ($i=0; $i < self::CAPACIDAD; $i++) { 
                if(!empty($this->personas[$i])){
                    $this->personas[$i]->mostrar();
                }
            }
        }

        public function agregarPersona($persona)
        {
            for ($i=0; $i < self::CAPACIDAD; $i++) { 
                if(empty($this->personas[$i])){
                    $this->personas[$i]=$persona;
                    print "Persona agregada<br>";
                    return true;
                }
            }
            return false;
        }
    }

?>