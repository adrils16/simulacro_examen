<?php
class Controller {
    public function __construct() {
        // Si se ha pasado una acción por GET y existe un método con ese nombre, lo ejecuto
        if (isset($_GET['accion']) && method_exists($this, $_GET['accion'])) {
            $this->{$_GET['accion']}();
        }
    }
}