<?php

namespace Model;

class Mensaje extends ActiveRecord {
    protected static $tabla = 'mensajes';
    protected static $columnasDB = ['id', 'nombre', 'apellidos', 'email', 'mensaje', 'fecha'];

    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $mensaje;
    public $fecha;
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellidos = $args['apellidos'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->mensaje = $args['mensaje'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'Tu nombre es Obligatorio';
        }
        if(!$this->apellidos) {
            self::$alertas['error'][] = 'Tus apellidos son Obligatorios';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email del Usuario es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Email no válido';
        }
        if(!$this->mensaje) {
            self::$alertas['error'][] = 'El mensaje no puede ir vacio';
        }
        return self::$alertas;

    }
}