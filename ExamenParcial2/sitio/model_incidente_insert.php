<?php
include './util.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$con = connect_db();
if (!isset($_POST)) {
    die();
}
$postdata = file_get_contents("php://input");
$data = json_decode($postdata, true);
$lugar_id = $data[0];
$tipo_incidente_id = $data[1];
$proyectos = $data;
insertar_incidente($lugar_id, $tipo_incidente_id, $con);
mysqli_close($con);
