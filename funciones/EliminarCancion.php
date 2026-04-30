<?php

function EliminarCancion(&$canciones) {
    echo "¿Qué canción quieres eliminar? (ingresa su id):";
    $id = (int)readline();
    for($i=0; $i< count($canciones); $i++) {
        if($canciones[$i]['id'] === $id) {
             $cancines[$i]['completada'] = true;
             array_splice($canciones, $i, 1);
             echo "Canción eliminada exitosamente.";
            break;
        }
    }
}