<?php
session_start();

// declarar la variable del controlador por defecto
$controlador = "Principal";
// declarar la variale de la función por defecto
$accion = "principal"; 

// si se recibe un controlador por GET, se asigna a la variable
if (!empty($_GET['controlador'])) {
    $controlador = $_GET['controlador'];
}

// si se recibe una función($accion) por GET, se asigna a la variable
if (!empty($_GET['accion'])) {
    $accion = $_GET['accion'];
}

// se crea la ruta del controlador
$rutaControlador = "controller/" . $controlador . "Controller.php";

// si el controlado existe, se le llama
if (file_exists($rutaControlador)) {

    require_once $rutaControlador;

    $nombreControlador = $controlador . "Controller";

    // se crea el objeto controlador para que pueda ejecutar la función
    $controladorObj = new $nombreControlador();
    
    // si la función existe, se ejecuta la función del controlador
    if (method_exists($controladorObj, $accion)) {
        $controladorObj->$accion();
    } else {
        die("El método no existe - 404 not found");
    }

} else {
    die("El controlador no existe - 404 not found");
}