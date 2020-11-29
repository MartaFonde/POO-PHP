<?php

    abstract class Producto {
        protected $nombre;
        protected $precio;

        function __construct($nombre, $precio){
            $this->setNombre($nombre);
            $this->setPrecio($precio);
        }
        
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }

        public function getPrecio()
        {
            return $this->precio;
        }            

        public function calcular($cant)
        {
            return $cant * $this->precio;
        }

        public function mostrarInfo()
        {
            print "Nombre: ".$this->nombre."<br>";
            print "Precio: ".$this->precio."<br>";
        }
    }

?>