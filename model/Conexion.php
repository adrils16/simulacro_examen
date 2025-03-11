<?php
class Conexion {
    private $host = 'localhost';
    private $db = 'Tienda';
    private $user = 'user';
    private $password = 'password';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
            // establecer el modo de error de PDO a excepción lo que significa que PDO lanzará excepciones si ocurren errores
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
    }

    /**
     * Devuelve la conexión
     * @return PDO
     */
    public function getConexion() {
        return $this->conn;
    }

    public function cerrarConexion() {
        $this->conn = null;
    }
}