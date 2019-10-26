<nav>
    <div class="logoBurguer">
        <a href="#" class="contenedorBurguer">
            <button class="hamburger muestraHamburguer hamburger--collapse" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
        </a>

        <div class="animaLogo">
            <a href="/">
                <h1>
                    <span>L</span>ara<span>B</span>ella
                </h1>
                <img src="{{asset('assets/images/iconos/icono3.svg')}}" alt="icono">
            </a>
        </div>
    </div>

    <ul class="">
        <li><a href="javascript:llamaBuscaProductos();" id="produc"><span>Productos</span><i class="fas fa-shopping-bag"></i></a></li>
        <li style="display: none" id="regProd"><a href="javascript:llamadasParciales()">Registrar productos <i class="fas fa-plus-circle"></i></a></li>
        <li><a href="javascript:muestraLogin();" id="muestraLogin"><span id="sp">Iniciar sesi&oacute;n</span><i class="fas fa-user icono-login"></i></a></li>
        <li style="display: none" id="logout"><a href="javascript:cerrarSesion();">Cerrar sesi&oacute;n<i class="fas fa-user-slash"></i></a></li>
    </ul>
</nav>
