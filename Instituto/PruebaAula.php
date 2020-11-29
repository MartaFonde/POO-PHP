<?php
    require_once("Aula.php");

    $a = new Aula(1, "FILOSOFIA");

    $e1 = new Estudiante("Ion", 25, "H");
    $e2 = new Estudiante("Artemisa", 20, "M");
    $e3 = new Estudiante("Poseidón", 26, "H");
    $e4 = new Estudiante("Afrodita", 30, "M");
    $e5 = new Estudiante("Ares", 27, "H");
    $p1 = new Profesor("Zeus", 68, "H", "filosofia");
    //$p2 = new Profesor("Hera", 60, "M", "fisica");

    $a->agregarPersona($e1);
    $a->agregarPersona($e2);
    $a->agregarPersona($e3);
    $a->agregarPersona($e4);
    $a->agregarPersona($e5);
    $a->agregarPersona($p1);
    //$a->agregarPersona($p2);

    $a->mostrarDatos();
    if($a->hayClase()){
        print "<b>Hay clase</b> <br>";
        $a->mostrarAprobados();
    }else{
        print "<b>No hay clase</b> <br>";
    }



?>