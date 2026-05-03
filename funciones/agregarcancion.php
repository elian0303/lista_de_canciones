<?php

function agregarCancion(&$canciones) {

    echo "\n===== AGREGAR CANCIÓN =====\n";

    echo "Título: ";
    $titulo = readline();

    echo "Artista: ";
    $artista = readline();

    echo "Álbum: ";
    $album = readline();

    $id = count($canciones) + 1;

    $canciones[] = [
        "id" => $id,
        "titulo" => $titulo,
                "artista" => $artista,
        "album" => $album
    ];

    echo "\nCanción agregada correctamente\n";

    echo "Presiona Enter para continuar...";
    readline();
    }
