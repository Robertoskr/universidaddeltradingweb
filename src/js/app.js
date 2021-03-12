
//Accordion
const accordions = document.querySelectorAll('.accordion');
const lis = document.querySelectorAll('.li-lista2');
const openAccordion = (accordion, li) => { //Funcion para cerrar el acordeon
    const content = accordion.querySelector('.accordion__content');

    accordion.classList.add('accordion__active');
    content.style.maxHeight = content.scrollHeight + 'px';
};

const closeAccordion = (accordion) => { //Funcion para cerrar el acordeon
    const content = accordion.querySelector('.accordion__content'); 
    accordion.classList.remove('accordion__active');
    content.style.maxHeight = null;
}
accordions.forEach((accordion) => { //Comprueba si estan abiertos o cerrados y llama las funciones
    const intro = accordion.querySelector('.accordion__intro');
    const content = accordion.querySelector('.accordion__content');

    intro.addEventListener('click', accordionClick);

    function accordionClick() {
        if(content.style.maxHeight) {
            closeAccordion(accordion);
        } else if(content.style.maxHeight == 0) {
            accordions.forEach((accordion) => closeAccordion(accordion));
            openAccordion(accordion);
        } else {
            openAccordion(accordion);
            accordions.forEach((accordion) => closeAccordion(accordion));
        }
    }
});

//Accordion- comprar
const accordion = document.querySelector('.accordion-compra');

const openAccordionCompra = (accordion) => {
    const content = accordion.querySelector('.accordion-compra-content');
    accordion.classList.add('accordion-compra-active')
    content.classList.add('ident');
};

const closeAccordionCompra = (accordion) => {
    const content = accordion.querySelector('.accordion-compra-content');
    accordion.classList.remove('accordion-compra-active');
    content.classList.remove('ident');

}

const introCurso = accordion.querySelector('.accordion-compra-intro');
const contentCurso = accordion.querySelector('.accordion-compra-content');
introCurso.addEventListener('click', accordionClickCurso);


function accordionClickCurso() {
    if(contentCurso.classList.contains('ident')) {
        closeAccordionCompra(accordion);
    } else if(contentCurso.style.maxHeight == 0) {
        openAccordionCompra(accordion);
        console.log('hola');
    } else {
        closeAccordionCompra(accordion);
    }
}


/*Este apartado sirve para ocultar y mostrar las diferentes secciones de la informacion del curso */
const seccion1 = document.querySelector('.lista1');
const seccion2 = document.querySelector('.lista2');
const seccion3 = document.querySelector('.descripcion-curso');
const btndown = document.querySelector('#bt-down');
const btnup = document.querySelector('#bt-up');
var contador = 1;
btnup.addEventListener('click', sumarcontador);
btndown.addEventListener('click', restarcontador);

console.log(btnup)

function sumarcontador(){
    contador += 1;

    cambiarSecciones()
}
function restarcontador(){
    contador -= 1;

    cambiarSecciones()
}


function cambiarSecciones(){
    if(contador === 1){
        btndown.classList.add('ocultar');
        seccion1.classList.remove('ocultar');
        seccion2.classList.add('ocultar');
        seccion3.classList.add('ocultar');
    } else if (contador == 2){
        btndown.classList.remove('ocultar');
        btnup.classList.remove('ocultar');
        seccion1.classList.add('ocultar');
        seccion2.classList.remove('ocultar');
        seccion3.classList.add('ocultar');
    } else if(contador === 3){
        btnup.classList.add('ocultar');
        seccion2.classList.add('ocultar');
        seccion3.classList.remove('ocultar');
    }
}