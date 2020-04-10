<?php
session_start();
require_once("../util.php");
//clean input
foreach ($_POST as $key => $val) {
    //$key: name in form
    //$value: value of name
    if (isset($_POST[$key])) {
        $_POST[$key] = htmlspecialchars($_POST[$key]);
    } else {
        $_POST[$key] = "";
    }
    echo "Field: " . $key . " | Value: " . $_POST[$key] . "<br>";
}
juego_editar($_POST["juego_nombre"], $_POST["juego_genero"], $_POST["juego_precio"], $_POST["juego_estudio"]);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/BLOQUE1/laboratorios/lab15.php');
