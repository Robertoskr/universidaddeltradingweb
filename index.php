<?php 
    require 'includes/funciones.php';
    incluirTemplate("header-inicio");

?>


    <main class='contenedor'>
        <h1>La mejor opcion para tu formacion</h1>
            <div class='seccion1'>
                <div class='icono'>
                    <img src='build/img/icono1.svg' alt='Icono seguridad' loading='lazy'>
                    <h3>Seguridad</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet, metus id elementum tempus,
                        eros nibh vestibulum metus, a volutpat eros est sit amet nisl. Sed sit amet maximus ex, eget aliquam enim.
                        Maecenas vestibulum justo erat, eu dictum lorem accumsan nec.
                    </p>
                </div>
                <div class='icono'>
                    <img src='build/img/icono2.svg' alt='Icono precio' loading='lazy'>
                    <h3>Precio</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet, metus id elementum tempus,
                        eros nibh vestibulum metus, a volutpat eros est sit amet nisl. Sed sit amet maximus ex, eget aliquam enim.
                        Maecenas vestibulum justo erat, eu dictum lorem accumsan nec.
                    </p>
                </div>
                <div class='icono'>
                    <img src='build/img/icono3.svg' alt='Icono tiempo' loading='lazy'>
                    <h3>Mas Completo</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet, metus id elementum tempus,
                        eros nibh vestibulum metus, a volutpat eros est sit amet nisl. Sed sit amet maximus ex, eget aliquam enim.
                        Maecenas vestibulum justo erat, eu dictum lorem accumsan nec.
                    </p>
                </div>
            </div>

    </main>

    <section class='background-azul no-margin'>
        <div class=' contenedor seccion3 contenido-metodologia'>
        <div class='imagen-reloj'>
            <img src='build/img/imagen-universidad.jpg' alt='Imagen Estudiante'>
        </div>
            <div class='texto-metodologia'>
            <h1>Nuestra metodologia</h1>
                <h3>Tu formacion, tus horarios</h3>
                <p>En La universidad del Trading hemos diseñado un curso totalmente flexible,
                    puedes ponerte tus propios horarios y no tener ataduras de horarios.
                    Gracias a eso hemos conseguido crear el curso mas completo y util sobre Trading
                    que existe en internet. Es similar a una serie de netflix, vas pasando video por 
                    video pero en este caso estas aprendiendo una de las habilidades mejor pagadas en el mundo.
                </p>
                <a href='curso.php' class='boton1'>Informacion completa</a>
            </div>
        </div>
    </section>



<?php 

    incluirTemplate("footer");

?>