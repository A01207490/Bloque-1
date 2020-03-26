<?php
require_once("../util.php");
//Clean the input, username and password.
if (isset($_POST["user"])) {
    $_POST["user"] = clean_input($_POST["user"]);
} else {
    $_POST["user"] = "unset";
}
if (isset($_POST["password"])) {
    $_POST["password"] = clean_input($_POST["password"]);
} else {
    $_POST["password"] = "unset";
}

echo $_POST["user"];
echo $_POST["password"];

if ($_POST["user"] == "beto" && $_POST["password"] == "samus") {
    // Username and password are correct.
    // Set session variables.
    session_start();
    $_SESSION["user"] = $_POST["user"];
    $_SESSION["password"] = $_POST["password"];
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/BLOQUE1/laboratorios/lab12.php');
}else if($_POST["user"] != "beto" && $_POST["password"] != "samus"){
    echo 'Incorrect user and password';
}
else if($_POST["user"] != "beto"){
    echo 'Incorrect user';
}
else {
    echo 'Incorrect password';
}

?>