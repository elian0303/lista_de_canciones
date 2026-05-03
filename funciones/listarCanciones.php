<?php

function listarCanciones($canciones) {

    echo "\n====== LISTA DE CANCIONES ======\n";

    if (count($canciones) === 0) {
        echo "No hay canciones\n";
    } else {
        for ($i = 0; $i < count($canciones); $i++) {

            echo "ID: " . $canciones[$i]["id"] . "\n";
            echo "Título: " . $canciones[$i]["titulo"] . "\n";
            echo "Artista: " . $canciones[$i]["artista"] . "\n";
            echo "Álbum: " . $canciones[$i]["album"] . "\n";
            echo "------------------------\n"; // separación
        }
    }

    echo "\nPresiona Enter para continuar...";
    readline();
}