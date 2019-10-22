<?php

namespace App;
class Cliente extends Usuario
{
    private $direccion;
    private $ciudad;
    private $estado;
    private $telCelular;
    private $telCasa;


    public function buscaUsuario(){
        $objetoUsuario = new Usuario();
        $objetoUsuario->setCuentaUsuario($this->cuentaUsuario);
        $objetoUsuario->setContrasenia($this->contrasenia);
        //parent::setCuentaUsuario($this->cuentaUsuario);
        //parent::setContrasenia($this->contrasenia);
        $datosUsuario = $objetoUsuario->buscaCvePas();
        if($datosUsuario){
            return true;
        }else{
            return false;
        }
    }

    public function buscaCliente(){
        $datosCliente = Cliente::where('cuentaUsuario', parent::getCuentaUsuario())->first();
        if($datosCliente){
            $datosCliente = $datosCliente->usuario;
            parent::setNombre($datosCliente['nombre']);
            parent::setPrimApellido($datosCliente['primApellido']);
            parent::setSeguApellido($datosCliente['seguApellido']);
            return true;
        }else{
            return false;
        }
    }

    //Relacion a la tabla Usuario
    public function usuario(){
        return $this->belongsTo('App\Usuario','cuentaUsuario','cuentaUsuario');
    }

    //Getters y Setters
    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($direccion): void{
        $this->direccion = $direccion;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function setCiudad($ciudad): void{
        $this->ciudad = $ciudad;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado): void{
        $this->estado = $estado;
    }

    public function getTelCelular(){
        return $this->telCelular;
    }

    public function setTelCelular($telCelular): void{
        $this->telCelular = $telCelular;
    }

    public function getTelCasa(){
        return $this->telCasa;
    }

    public function setTelCasa($telCasa): void{
        $this->telCasa = $telCasa;
    }
}
