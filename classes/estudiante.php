<?php 
namespace App;

class Estudiante {

    public static $db;

    public $id;
    public $email;
    public $clave;

    //Definir la conexion a la base de datos
    public static function setDB($database){
        self::$db = $database;
    }


    public function __construct($args = []) {
        $this->id = $args['id'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->clave = $args['clave'] ?? '';
    }

    public function validar() {
        $query = "SELECT * FROM estudiantes WHERE email='$this->email';";
        $resultado = self::$db->query( $query);

        if($resultado->num_rows){
            $usuario = $resultado->fetch_assoc();
            $auth = false;
            if($usuario['clave'] === $this->clave){
                $auth = true;
            } else {
                return false;
            }
            if($auth === true){
                session_start();

                $_SESSION['estudiante'] = $usuario['email'];
                $_SESSION['login'] = true;


                header('Location: /universidaddeltradingweb/universidad.php');
            } else {
                return false;
            }
        } else {
            return false;
        }

    }
}
