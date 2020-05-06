<?php
include './util.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$con = connect_db();
$response = consultar_incidentes($con);
mysqli_close($con);
echo json_encode($response);
