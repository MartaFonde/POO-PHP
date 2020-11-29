<?php
    require_once("Repartidor.php");
    require_once("Comercial.php");

    $repartidor1 = new Repartidor("Carmela repartidora 23 1500", 23, 1500, 3);
    $repartidor1->PLUS();
    //print $repartidor1->getSalario();
    $repartidor2 = new Repartidor("Maria repartidora 30 1500", 30, 1500, 3);
    // $repartidor2->PLUS();
    // print $repartidor2->getSalario();


    $comercial1 = new Comercial("Leo comercial 23 1500 200", 23, 1500, 201);
    $comercial1->PLUS();
    print $comercial1->getSalario();

    $comercial2 = new Comercial("Marina comercial 31 1500 250", 31, 1500, 250);
    // $comercial2->PLUS();
    // print $comercial2->getSalario();
    

?>