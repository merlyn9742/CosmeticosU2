<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Tipo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class productosController extends Controller{

    public function buscarTodos(){
        $objetoProducto = new Producto();
        $arregloEncontrados = $objetoProducto->getProductos();
        return response()->json([
            "arregloProductos" => $arregloEncontrados
        ],200);
    }

    public function buscarPorTipo(Request $request){
        $objetoProducto = new Producto();
        $objetoProducto->setTipo($request->input('tipo'));
        $arregloEncontrados = $objetoProducto->getProductosTipo();
        return response()->json([
            "arregloProductos" => $arregloEncontrados
        ],200);
    }

    public function buscarPorLinea(Request $request){
        $objetoProducto = new Producto();
        $objetoProducto->setLinea($request->input('linea'));
        $arregloEncontrados = $objetoProducto->getProductosLinea();
        return response()->json([
            "arregloProductos" => $arregloEncontrados
        ],200);
    }



}
