<?php
session_start();
$auth = $_SESSION['estudiante'];
if(!$auth){
    header('Location: /universidaddeltradingweb/login.php');
}

require 'includes/app.php';

use App\Clases;
//Metodo para obtener todas las clases de la bd class=clases.php
$clases = Clases::all();


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
}



incluirTemplate('header');
?>
<h1>Bienvenido al curso! Nos alegra verte aqui!</h1>
<main class='contenedor'>
    <h1>Estudiante</h1>
    <table class='clases'>
        <thead>
            <tr>
                <th>Numero Clase</th>
                <th>Titulo</th>
                <th>Duración</th>
                <th>Acciones</th>
            </tr>

        </thead>
        <tbody>
            <!--Mostrar los resultados de la bd-->
            <?php foreach( $clases as $clase): ?>
                <tr>
                    <td><?php echo $clase->id; ?></td>
                    <td><?php echo $clase->titulo; ?></td>
                    <td> <?php echo $clase->duracion; ?></td>
                    <td>
                        <form method='POST' class='w-100'>
                            <input type='hidden' name='id' value='<?php echo $propiedad->id; ?>'>


                            <a  href='ver.php?clase=<?php echo $clase->id ?>'class='boton-rojo-block' >Ver</a>
                        </form>
                    </td>
                </tr>
            <?php endforeach;   ?>
        </tbody>
    </table>
</main>

<?php
incluirTemplate('footer');