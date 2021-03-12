<?php
require('includes/app.php');
session_start();
$auth = $_SESSION['estudiante'];
if (!$auth) {
    header('Location: /universidaddeltradingweb/login.php');
}

use App\Clases;

$id = $_GET['clase'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /universidad.php');
}
$db = conectarDB();

$Arrayclase = Clases::one($id);
$clase = $Arrayclase[0];



incluirTemplate('header');
?>
<div class='ver-clase'>
    <h1>CLASE <?php echo $clase->id ?></h1>
    <h3><?php echo $clase->titulo ?></h3>
<a href='universidad.php'>Volver</a>
    <?php echo $clase->link; ?>
    
</div>






        <?php
        incluirTemplate('footer');
