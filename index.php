<?php

$canciones = [];

include_once "funciones/VerMenu.php";
include_once "funciones/agregarcancion.php";
include_once "funciones/listarCanciones.php";
include_once "funciones/EliminarCancion.php";

$opcion = 0;

while ($opcion != 4) {

    VerMenu(); 

    $opcion = readline("Selecciona una opción: ");

    switch ($opcion) {

        case 1:
            agregarCancion($canciones); 
            break;

        case 2:
            listarCanciones($canciones); 
            break;

        case 3:
            eliminarCancion($canciones); 
            break;

        case 4:
            echo "Saliendo...\n";
            break;

        default:
            echo "Opción inválida\n";
    }
}