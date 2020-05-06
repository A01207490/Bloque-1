<?php
include './util.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if (!isset($_POST)) {
    die();
}
$con = connect_db();
$postdata = file_get_contents("php://input");
$data = json_decode($postdata, true);
$menu_nombre = $data[0]["menu"];
$menu = [];
switch ($menu_nombre) {
    case "tipos_incidente_menu":
        $menu = consultar_tipos_incidente($con);
        break;
    case "lugares_menu":
        $menu = consultar_lugares($con);
        break;
    default:
        break;
}
echo json_encode($menu);
mysqli_close($con);
