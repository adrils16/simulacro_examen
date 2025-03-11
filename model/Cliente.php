<?php
class Cliente {

    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    /**
     * Realiza el login de un usuario
     * @param string $username Nombre de usuario
     * @param string $password Contraseña
     * @return boolean Verdadero si el login fue exitoso, falso en caso contrario
     */
    public function login($username, $password) {
        try {
            // Prepara la consulta SQL para seleccionar el usuario y la contraseña de la tabla Cliente
            $consulta = $this->db->getConexion()->prepare("SELECT `user`, `pass` FROM `Cliente` WHERE user = :user AND pass = :pass");
            
            // Ejecuta la consulta con los parámetros proporcionados
            $consulta->execute([':user' => $username, ':pass' => $password]);
            
            // Obtiene los resultados de la consulta
            $filas = $consulta->fetch(PDO::FETCH_ASSOC);
            
            // Cierra el cursor de la consulta
            $consulta->closeCursor();
            
            // Verifica si se encontraron filas (usuario y contraseña coinciden)
            if ($filas !== false) {
                // Asigna los valores de usuario y contraseña a variables
                $user = $filas['user'];
                $pass = $filas['pass'];
                
                // Inicia una sesión y guarda los datos del usuario en variables de sesión
                session_start();
                $_SESSION['logged'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                
                // Retorna verdadero indicando que el login fue exitoso
                return true;
            } else {
                // Retorna falso indicando que el login falló
                return false;
            }
        } catch (PDOException $e) {
            // Muestra un mensaje de error si ocurre una excepción
            echo "Error: " . $e->getMessage();
            return false;
        } finally {
            // Cierra la conexión a la base de datos
            $this->db->cerrarConexion();
        }
    }
}