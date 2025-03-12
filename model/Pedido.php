<?php
class Pedido {

    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    /**
     * Obtiene los pedidos de un cliente
     * @param string $username Nombre de usuario
     * @return array Arreglo con los códigos de pedido del cliente
     */
    public function getPedidos($username) {

        $codPedidos = null;

        try {
            // Prepara la consulta SQL para seleccionar el código de pedido del cliente
            $consulta = $this->db->getConexion()->prepare("SELECT cod FROM `Pedido` WHERE cod_cliente = (SELECT cod FROM `Cliente` WHERE alias = :alias)");
            
            $consulta->execute([':alias' => $username]);

            $codPedidos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            $consulta->closeCursor();

            return $codPedidos;

        } catch (Exception $e) {
            // Muestra un mensaje de error si ocurre una excepción
            echo "Error: " . $e->getMessage();
            return $codPedidos;
            
        } finally {
            // Cierra la conexión a la base de datos
            $this->db->cerrarConexion();
        }
    }

}