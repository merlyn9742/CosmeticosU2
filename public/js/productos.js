function muestraSelect(valueSelect){
    var divSelectLineas = $('#lineas');
    var divSelecTipos = $('#tipos');
    var inputFiltra = $('#inputFiltra');
    inputFiltra.show();
   if(valueSelect == 1){
        divSelectLineas.show();
        divSelecTipos.hide();
   }else if (valueSelect == 2) {
        divSelecTipos.show();
        divSelectLineas.hide();
   }
}

function filtrado(selectFiltro,linea,tipo){
    if (selectFiltro == 1) {
        var url = "api/productos/linea";
        var queryString = "linea="+linea;
        llamadasParciales(url, queryString,"POST");
    }else if(selectFiltro == 2){
        var url = "api/productos/tipo";
        var queryString = "tipo="+tipo;
        llamadasParciales(url, queryString,"POST");
    }
}

function llamaBuscaProductos() {
    var sectionRegistrarse = $('#sectionRegistrarse');
    sectionRegistrarse.hide();
    var divDesliza = $('#divDesliza');
    var divTexto = $('#divTexto');
    divTexto.hide();
    var login = $('#sectionLogin');
    login.hide();
    var divParentAbsoluto = $('#parentAbsoluto');
    divParentAbsoluto.show();
    var welcome = $('#welcome');
    var pro = $('#regProducto');
    pro.hide();
    welcome.hide();
    divDesliza.show();
    var url = "api/productos";
    llamadasParciales(url,"","GET");
}


function llamadasParciales(url,queryString,metodo){
            var llamada = $.get(
                    url, 
                    { //datos a enviar
                        queryString
                    }, 
                    function(oDatos) { //trabajo a realizar en caso de éxito
                        pintaProductos(oDatos);
                    } //fin function llamada ok
                ); //fin configura llamada
            llamada.fail(function(objRequest, status){
                    alert("Error al invocar al servidor, intente posteriormente");
                    console.log(status);
                });
        }

function pintaProductos(datos) {
    console.log(datos);
    var p = $('#parentCajas');
    if(p!=null){
        var parentCajas = $('#parentCajas');
        parentCajas.remove();
    }
    var parentAbsoluto = $('#parentAbsoluto');
    var divParentCajas = $('<div></div>');
    divParentCajas.attr('class', 'parentCajas');
    divParentCajas.attr('id', 'parentCajas');
    parentAbsoluto.append(divParentCajas);
    if(datos.arregloProductos === null){
        var divTextoMensaje = $('<h4>¡Lo sentimos, no tenemos productos para mostrar con estas caracteristicas!</h4>');
        divParentCajas.append(divTextoMensaje);
    }else{
        for (var i=0;i<datos.arregloProductos.length;i++){
            var caja = $('<div></div>').attr('class', 'caja');

            //Elementos de la caja
            var divTexto = $('<div></div>');
            var divTextoTitulo =  $('<h5></h5>');
            var tituloTexto = datos.arregloProductos[i][4];


            var divImagen = $('<div></div>');
            var divImagenImg = $('<img></img>');
            divImagenImg.attr('width','100em');
            divImagenImg.attr('heigth','100em');
            divImagenImg.attr('src', datos.arregloProductos[i][7]);

            var divDescripcion = $('<div></div>');
            var divDescripcionDesc = $('<p></p>');
            var descripcionTexto = datos.arregloProductos[i][5];
            var divDescripcionLinea = $('<p></p>');
            var lineaTexto = datos.arregloProductos[i][1];
            var divDescripcionTipo = $('<p></p>');
            var tipoTexto = datos.arregloProductos[i][2];


            var divDescripcionColor =$('<p></p>');
            var colorTexto = datos.arregloProductos[i][6];
            var divPrecio = $('<div></div>');
            var divPrecioPre = $('<span></span>');
            var precioTexto = "$"+datos.arregloProductos[i][8]+" MXN";

            var divCompra = $('<div></div>');
            var btnCompra = $('<button></button>');
            var btnCompraTexto = "Comprar";


            divParentCajas.append(caja);
            caja.append(divTexto);
            divTexto.append(divTextoTitulo);
            divTextoTitulo.append(tituloTexto);
            caja.append(divImagen);
            divImagen.append(divImagenImg);
            caja.append(divDescripcion);
            divDescripcion.append(divDescripcionDesc);
            divDescripcionDesc.text(descripcionTexto);
            divDescripcion.append(divDescripcionTipo);
            divDescripcionTipo.text(tipoTexto);
            divDescripcion.append(divDescripcionLinea);
            divDescripcionLinea.text(lineaTexto);
            if(datos.arregloProductos[i][6]!=null){
                divDescripcion.append(divDescripcionColor);
                divDescripcionColor.text(colorTexto);
            }
            if(sessionStorage.length>0){
                caja.append(divPrecio);
                divPrecio.append(divPrecioPre);
                divPrecioPre.text(precioTexto);
                caja.append(divCompra);
            }
            if(sessionStorage.length>0&&sessionStorage.getItem('tipoUsuario')=='C'){
                divCompra.append(btnCompra);
                btnCompra.text(btnCompraTexto);
            }
        }
    }


}

function registraProductos(){
    var divDesliza = document.getElementById("divDesliza");
    var divMensaje = document.getElementById("mensajeRegistroP");
    var divTexto = document.getElementById("divTexto");
    var sectionLogin=document.getElementById("sectionLogin");
    var sectionRegistrarse=document.getElementById("sectionRegistrarse");
    var regProducto = document.getElementById("regProducto");
    var divParentAbsoluto = document.getElementById('parentAbsoluto');
    var welcome = document.getElementById('welcome');
    divMensaje.style.display = "none";
    //aquí debe poner el login en display:none y el welcome en block
    //ya está el json cargado con la información, por si necesitas sacar algo
    if(divTexto.style.display==="flex"|| divParentAbsoluto.style.display==="flex" ||
        sectionLogin.style.display==="flex" || sectionRegistrarse.style.display==="flex" ||
        welcome.style.display==="flex"){
        welcome.style.display="none";
        divTexto.style.display="none";
        sectionLogin.style.display="none";
        divParentAbsoluto.style.display="none";
        sectionRegistrarse.style.display="none";
        divDesliza.style.display = "none";
        regProducto.style.display="flex";
    }
}

function registraProducto(){
    var divMensaje = document.getElementById("mensajeRegistroP");
    divMensaje.style.display = "flex";
}
