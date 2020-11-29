<?php
    require_once("Perecedero.php");
    require_once("NoPerecedero.php");

    $p1 = new Perecedero("Naranja", 2, 1);
    $p1->mostrarInfo();
    print "Precio total 1 naranja: ".$p1->calcular(1)."<br>";
    
    $p3 = new Perecedero("Yogur", 0.5, 10);
    $p3->mostrarInfo();
    print "Precio total 5 yogures: ".$p3->calcular(5)."<br>";

    $p2 = new NoPerecedero("Aceite", 3, "Aceite");
    $p2->mostrarInfo();
    print "Precio total 10 aceite: ".$p2->calcular(10)."<br>";

    $p4 = new NoPerecedero("Mejillones", 1, "Conservas");
    $p4->mostrarInfo();
    print "Precio total: ".$p4->calcular(4)."<br>";



















?>
