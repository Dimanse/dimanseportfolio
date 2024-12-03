<?php

namespace Model;

class Trabajo extends ActiveRecord {
    protected static $tabla = 'trabajos';
    protected static $columnasDB = ['id', 'nombre', 'url_github', 'url_web', 'imagen', 'descripcion'];

    public $id;
    public $nombre;
    public $url_github;
    public $url_web;
    public $imagen;
    public $descripcion;
}