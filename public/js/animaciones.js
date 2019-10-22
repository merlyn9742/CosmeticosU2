var hamburguer = document.querySelector(".hamburger");
hamburguer.addEventListener("click", function(){
    hamburguer.classList.toggle("is-active");
});

var contenedorBurguer = document.querySelector('.contenedorBurguer');
contenedorBurguer.addEventListener("click", function () {
   var ul = document.getElementsByTagName("ul")[0];
   ul.classList.toggle("active");
});
