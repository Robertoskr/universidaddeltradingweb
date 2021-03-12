<?php

function conectarDB() : mysqli {
    $db = new mysqli($host = 'localhost', $user = 'root', 
    $passwd = 'root', $dbname = 'universidadtrading');

    if(!$db) {
        echo 'error no se pudo conectar la db';
        exit;
    }
    return $db;
}