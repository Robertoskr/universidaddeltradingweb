<?php 
namespace App;

class Clases {
    public static $db;

    public $id;
    public $titulo;
    public $link;
    public $duracion;

    //Definir la conexion a la base de datos
    public static function setDB($database)
    {
        self::$db = $database;
    }
    public function __construct($args = []) {
        $this->id = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->link = $args['link'] ?? '';
        $this->duracion = $args['duracion'] ?? '';
    }

    public static function all() {
        $query = "SELECT * FROM clases;";

        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function one($id) {
        $query = "SELECT * FROM clases WHERE id=$id";
        

        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function consultarSQL($query){
        $resultado = self::$db->query($query);
        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = self::crearObjeto($registro);
        }

        //liberar la meroria
        $resultado->free();

        //Retornar los resultados
        return $array;
    }

    protected static function crearObjeto($registro){
        $objeto = new self;
        foreach($registro as $key => $value) {
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }



}