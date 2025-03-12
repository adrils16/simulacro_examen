<?php
class Producto {

    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }
    
}