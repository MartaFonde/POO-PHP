<?php
require_once("Bebida.php");
class Agua extends Bebida{
    protected $origen;

    function __construct($id,$marca, $precio, $litros, $origen)
    {
        parent::__construct($id, $marca, $precio, $litros);  
        $this->setOrigen($origen);      
    }

    public function setOrigen($origen)
    {
        $this->origen = strToUpper($origen);
    }

    public function getOrigen()
    {
        return $this->origen;
    }

    public function info()
    {
        parent::info();
        print "Origen: ".$this->origen."<br>";
    }
}




?>