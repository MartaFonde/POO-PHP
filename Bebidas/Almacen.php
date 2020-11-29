<?php
    require_once("Agua.php");
    require_once("BebidaAzucarada.php");

    class Almacen {
        public $bebidas = array(array(), array());
        const CAPACIDAD = 10;

        function __construct()
        {     
        }

        public function precioTotal()
        {
            $acu = 0;
            for ($i=0; $i < self::CAPACIDAD; $i++) { 
                for ($j=0; $j < count($this->bebidas); $j++) { 
                    if(!empty($this->bebidas[$i][$j])){
                        $acu+=$this->bebidas[$i][$j]->getPrecio();
                    }
                }
            }            
            return $acu;
        }

        public function precioTotalMarca($marca)
        {
            $acu = 0;
            for ($i=0; $i < self::CAPACIDAD; $i++) { 
                for ($j=0; $j < count($this->bebidas); $j++) { 
                    if(!empty($this->bebidas[$i][$j])){
                        if(strcmp($this->bebidas[$i][$j]->getMarca(), strToUpper($marca)) == 0){
                            $acu += $this->bebidas[$i][$j]->getPrecio();
                        }
                    }                
                }    
            }            
            return $acu;
        }

        public function precioTotalEstante($estante)
        {
            $acu = 0;
            for ($i=0; $i < self::CAPACIDAD; $i++) { 
                if(!empty($this->bebidas[$i][$estante])){
                    $acu += $this->bebidas[$i][$estante]->getPrecio();
                }
            }
            return $acu;
        }

        public function agregarProducto($bebida)
        {
            if(count($this->bebidas) < self::CAPACIDAD){
                if($this->comprobarId($bebida->getId())){
                    if($bebida instanceof Agua){
                        for ($i=0; $i < self::CAPACIDAD; $i++) { 
                            if(empty($this->bebidas[$i][0])){
                                $this->bebidas[$i][0] = $bebida;
                                print "Bebida añadida <br>";
                                return true;
                            }
                        }
                    }else{                
                        for ($i=0; $i < self::CAPACIDAD; $i++) { 
                            if(empty($this->bebidas[$i][1])){
                                $this->bebidas[$i][1] = $bebida;
                                print "Bebida añadida <br>";
                                return true;
                            }
                        }
                    }
                }else{
                    print "Ya existe una bebida con ese id <br>";
                }                
            }   
            return false;         
        }

        public function eliminarProducto($id)
        {
            if(!$this->comprobarId($id)){
                for ($i=0; $i < self::CAPACIDAD; $i++) { 
                    for ($j=0; $j < count($this->bebidas); $j++) { 
                        if(!empty($this->bebidas[$i][$j])){
                            if($this->bebidas[$i][$j]->getId() == $id){
                                unset($this->bebidas[$i][$j]);
                                print "Bebida eliminada <br>";
                                return true;
                            }                        
                        }
                    }
                }
            }else{
                "No existe ninguna bebida con ese id <br>";
            }
        }

        public function comprobarId($id)
        {
            for ($i=0; $i < self::CAPACIDAD; $i++) { 
                for ($j=0; $j < count($this->bebidas); $j++) { 
                    if(!empty($this->bebidas[$i][$j])){
                        if($this->bebidas[$i][$j]->getId() == $id){
                            return false;
                        }                        
                    }
                }
            }
            return true;
        }

        public function mostrarInfo()
        {
            for ($i=0; $i < self::CAPACIDAD; $i++) {
                for ($j=0; $j < count($this->bebidas); $j++) { 
                    if(!empty($this->bebidas[$i][$j])){
                        $this->bebidas[$i][$j]->info(); 
                    }
                }                 
            }            
        }        

    }



?>