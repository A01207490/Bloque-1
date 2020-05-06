<?php

function connect_db()
{
    $server_name = "mysql1008.mochahost.com";
    $user_name = "dawbdorg_1207490";
    $password = "1207490";
    $db_name = "dawbdorg_A01207490";
    $con = mysqli_connect($server_name, $user_name, $password, $db_name);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $con;
}

function consultar_incidentes($con)
{
    $query = ("CALL consultar_incidentes()");
    $result = mysqli_query($con, $query);
    $response = [];
    $i = 0;
    while ($rs = mysqli_fetch_assoc($result)) {
        $response[$i] = $rs;
        $i += 1;
    }
    return $response;
}

function insertar_incidente($lugar_id, $tipo_incidente_id, $con)
{
    $query = ("CALL insertar_incidente('$lugar_id', '$tipo_incidente_id')");
    mysqli_query($con, $query);
}

function consultar_lugares($con)
{
    $query = ("CALL consultar_lugares()");
    $result = mysqli_query($con, $query);
    $response = [];
    $i = 0;
    while ($rs = mysqli_fetch_assoc($result)) {
        $response[$i] = $rs;
        $i += 1;
    }
    return $response;
}

function consultar_tipos_incidente($con)
{
    $query = ("CALL consultar_tipos_incidente()");
    $result = mysqli_query($con, $query);
    $response = [];
    $i = 0;
    while ($rs = mysqli_fetch_assoc($result)) {
        $response[$i] = $rs;
        $i += 1;
    }
    return $response;
}