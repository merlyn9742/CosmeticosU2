const etiquetaMenu = document.getElementsByClassName("contenedor-nav");
var scroll;
window.onscroll = function () {
    if (window.scrollY > 0){
        etiquetaMenu[0].classList.toggle('esconde-nav', window.scrollY > scroll);
        scroll = window.scrollY;
    }

};

var hamburguer = document.querySelector(".hamburger");
hamburguer.addEventListener("click", function(){
    hamburguer.classList.toggle("is-active");
});

var contenedorBurguer = document.querySelector('.contenedorBurguer');
contenedorBurguer.addEventListener("click", function () {
   var ul = document.getElementsByTagName("ul")[0];
   ul.classList.toggle("active");
});
