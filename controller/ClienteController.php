<?php
require_once 'model/Cliente.php';
require_once 'Controller.php';
class ClienteController extends Controller
{


    public function cargarLogin()
    {
        require_once 'view/login.php';
    }
    public function cargarUser_page()
    {
        require_once 'view/user_page.php';
    }

    public function login()
    {
        // Verificar si el formulario fue enviado y si las claves existen en $_POST
        if (isset($_POST['user'], $_POST['pass'])) {
            $cliente = new Cliente();

            // Llamar al método login con los datos proporcionados
            if ($cliente->login($_POST['user'], $_POST['pass']) === true) {
                // Inicio la sesión y redirijo a la página de usuario
                $this->cargarUser_page();
            } else {
                // Si no son correctos, vuelvo a mostrar el formulario de login
                $this->cargarLogin();
            }
        } else {
            // Si los datos no están en $_POST, muestro el formulario de login
            $this->cargarLogin();
        }
    }

    public function logout()
    {
        $cliente = new Cliente();
        $cliente->logout();
    }

}