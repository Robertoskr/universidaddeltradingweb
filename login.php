<?php


require 'includes/app.php';

use App\Estudiante;


$auth = true;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = ['email' => $_POST['user'], 'clave' => $_POST['password']];

    $estudiante = new Estudiante($login);
    $estudiante->validar();

}




incluirTemplate("header");
?>

<main class='estudiante background-azul'>
    <h1>Inicia sesion para acceder al curso</h1>
    <div class='formulario-estudiante contenedor'>
        <form method='POST'>
            <fieldset>
                <h1>Login</h1>
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = ['email' => $_POST['user'], 'clave' => $_POST['password']];

    $estudiante = new Estudiante($login);
    if($estudiante->validar() === false){
        echo "<h2 class='mensaje error'>Las credenciales son incorrectas</h2>" ;

}} ?>
                <label for='user'>Nombre Usuario</label>
                <input type='num' name='user' id='email' placeholder='Nombre de usuario:'>

                <label for='password'>Clave de Acceso Curso</label>
                <input type='password' name='password' id='password' placeholder='Contraseña:'>
            </fieldset>
            <input type='submit' value='Acceder' class='boton inicio-sesion'>
        </form>
    </div>

</main>

<script src='src/js/app.js'></script>



<?php incluirTemplate("footer"); ?>