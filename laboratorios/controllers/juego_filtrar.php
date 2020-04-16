<?php
session_start();
require_once("../util.php");
//clean input
foreach ($_GET as $key => $val) {
    //$key: name in form
    //$value: value of name
    if (isset($_GET[$key])) {
        $_GET[$key] = htmlspecialchars($_GET[$key]);
    } else {
        $_GET[$key] = "";
    }
    //echo "Field: " . $key . " | Value: " . $_GET[$key] . "<br>";
}
juegos_consultar($_GET["juego_genero"], $_GET["juego_estudio"]);
//header('Location: http://' . $_SERVER['HTTP_HOST'] . '/BLOQUE1/laboratorios/lab15.php');
