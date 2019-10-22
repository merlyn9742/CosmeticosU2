"use strict";
    const etiquetaMenu = document.getElementsByClassName("contenedor-nav");
    var scroll;
    window.onscroll = function () {
        if (window.scrollY > 0){
            etiquetaMenu[0].classList.toggle('esconde-nav', window.scrollY > scroll);
            scroll = window.scrollY;
        }

    };
