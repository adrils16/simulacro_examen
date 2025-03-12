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
            $consulta = $this->db->getConexion()->prepare("SELECT `alias`, `pass` FROM `Cliente` WHERE alias = :alias AND pass = :pass");
            
            // Ejecuta la consulta con los parámetros proporcionados
            $consulta->execute([':alias' => $username, ':pass' => $password]);
            
            // Obtiene los resultados de la consulta
            $filas = $consulta->fetch(PDO::FETCH_ASSOC);
            
            // Cierra el cursor de la consulta
            $consulta->closeCursor();
            
            // Verifica si se encontraron filas (usuario y contraseña coinciden)
            if ($filas !== false) {
                // Asigna los valores de usuario y contraseña a variables
                $alias = $filas['alias'];
                $pass = $filas['pass'];
                
                // Inicia una sesión y guarda los datos del usuario en variables de sesión
                session_start();
                $_SESSION['logged'] = true;
                $_SESSION['alias'] = $alias;
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

    /**
     * Cierra la sesión de un usuario
     * @return void
     */
    function logout() {
        session_unset(); // Limpia todas las variables de sesión
        session_destroy(); // Destruye todas las sesiones
        header(header: "Location: ../index.php?controlador=Cliente"); // Redirige al index
    }
}