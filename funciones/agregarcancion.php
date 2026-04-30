<?php 

function agregarCancion(&$canciones) { 
    $titulo = readline("Titulo: ");
    $artista = readline("Artista: ");
    $album = readline("Album: ");
    $favorita = readline("favorita: ");
    $canciones[] = [
        "id" => count($canciones) + 1,
        "titulo" => $titulo,
        "artista" => $artista,
        "favorita" => $favorita,
        "album" => $album
    ];
} 

