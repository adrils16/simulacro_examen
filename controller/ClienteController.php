<?php
require_once 'model/Cliente.php';
class ClienteController extends Controller {

    private $cliente =  new Cliente();

    public function cargarLogin() {
        require_once 'view/login.php';
    }
    public function cargarUser_page() {
        require_once 'view/user_page.php';
    }

    public function login() {
        
        if ($this->cliente->login($_POST['user'], $_POST['pass']) === true) {
            // Inicio la sesión y redirijo a la página de usuario
            $this->cargarUser_page();
        } else {
            // Si no son correctos, vuelvo a mostrar el formulario de login
            $this->cargarLogin();
        }   
    }

    public function logout() {
        $this->cliente->logout();
    }

}