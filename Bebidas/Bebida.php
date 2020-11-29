<?php
    abstract class Bebida {
       // public static $id = 0;
        protected $id;
        protected $marca;
        protected $precio;
        protected $litros;
        
        function __construct($id, $marca, $precio, $litros)
        {
            $this->setId($id);                        
            $this->setMarca($marca);
            $this->setPrecio($precio);
            $this->setLitros($litros);
        }     

        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }

        public function getPrecio()
        {
            return $this->precio;
        }

        public function setMarca($marca)
        {
            $this->marca= strToUpper($marca);
        }

        public function getMarca()
        {
            return $this->marca;
        }

        public function setLitros($litros)
        {
            $this->litros = $litros;
        }

        public function getLitros()
        {
            return $this->litros;
        }

        public function info(){
            print "<b>ID: ".$this->getId()."</b><br>";
            print "Marca: ".$this->getMarca()."<br>";
            print "Precio: ".$this->getPrecio()."<br>";
            print "Litros: ".$this->getLitros()."<br>";        
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;
        }
    }
?>