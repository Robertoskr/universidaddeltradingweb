<?php 

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

//Conectarnos a la bd
$db = conectarDB();


use App\Estudiante;

Estudiante::setDB($db);

use App\Clases;
Clases::setDB($db);


