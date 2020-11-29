<?php
    require_once("Almacen.php");

    $almacen = new Almacen();

    $agua1 = new Agua(1, "Cabreiroá", 0.5, 1, "O Vento");
    $almacen->agregarProducto($agua1);

    $agua2 = new Agua(3, "Cabreiroá", 0.5, 1, "O Vento");
    $almacen->agregarProducto($agua2);
    
    $bebAzucar1 = new BebidaAzucarada(1, "Coca-cola", 1.25, 1, 0.75, false);
    $almacen->agregarProducto($bebAzucar1);
    
    $bebAzucar2 = new BebidaAzucarada(2, "Pepsi", 1, 1, 0.75, true);
    $almacen->agregarProducto($bebAzucar2);

    //$almacen->eliminarProducto(1);

    print "Precio total: ".$almacen->precioTotal()."<br>";
    //print "Precio estante".$almacen->precioTotalEstante(0)."<br>";

    //print $almacen->precioTotalMarca("cabreiroá");

    $almacen->mostrarInfo();




?>  