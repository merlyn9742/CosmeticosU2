<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{

    protected $cuentaUsuario;
    protected $contrasenia;
    protected $nombre;
    protected $primApellido;
    protected $seguApellido;

    /* METODOS DEL MODELO */
    public function buscaCvePas(){
        /* Consulta usando ELOQUENT -> Trae al usuario si lo encuentra en la tabla usuarios */
        $usuario = Usuario::where([
            ['cuentaUsuario', $this->cuentaUsuario],
            ['contrasenia', $this->contrasenia]
        ])->first();
        return $usuario;
    }

    /* RELACIONES ENTRE MODELOS*/
    public function cliente(){
        return $this->hasOne('App\Cliente','cuentaUsuario','cuentaUsuario');
    }
    public function administrador(){
        return $this->hasOne('App\Administrador','cuentaUsuario','cuentaUsuario');
    }

    /* SETTERS Y GETTERS */
    public function getCuentaUsuario(){
        return $this->cuentaUsuario;
    }

    public function setCuentaUsuario($cuentaUsuario): void{
        $this->cuentaUsuario = $cuentaUsuario;
    }

    public function getContrasenia(){
        return $this->contrasenia;
    }

    public function setContrasenia($contrasenia): void{
        $this->contrasenia = $contrasenia;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre): void{
        $this->nombre = $nombre;
    }

    public function getPrimApellido(){
        return $this->primApellido;
    }

    public function setPrimApellido($primApellido): void{
        $this->primApellido = $primApellido;
    }

    public function getSeguApellido(){
        return $this->seguApellido;
    }

    public function setSeguApellido($seguApellido): void{
        $this->seguApellido = $seguApellido;
    }

}
