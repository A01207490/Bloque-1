<?php

function match($name, $company, $type1, $type2)
{
	if ($company == "nintendo") {
		$openworld = "resources/images/breatheofthewild.jpg";
		$openworldtext = "The Legend of Zelda Breathe of the Wild";
		$hackandslash = "resources/images/astralchain.jpg";
		$hackandslashtext = "Astral Chain";
	} else {
		$openworld = "resources/images/horizonzerodawn.jpg";
		$openworldtext = "Horizon Zero Dawn";
		$hackandslash = "resources/images/devilmaycry5.jpg";
		$hackandslashtext = "Devil May Cry 5";
	}

	include("_matchabove.html");
	if ($type1 == "openworld") {
		include("_openworldcard.html");
	}
	if ($type2 == "hackandslash") {
		include("_hackandslashcard.html");
	}
	include("_matchbelow.html");
}

function clean_input($variable)
{
	return $variable = htmlspecialchars($variable);
}

function connect_db($db_name)
{
	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	//$db_name = "socios_formadores";
	$con = mysqli_connect($server_name, $user_name, $password, $db_name);
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $con;
}

function juegos_consultar($juego_genero, $juego_estudio)
{
	//connect to the database
	$con = connect_db("laboratorios");
	// check connection 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$query = ("	SELECT *
				FROM juegos");
	if ($juego_genero != "") {
		$query .= " AND juego_genero=" . $juego_genero;
	}
	if ($juego_estudio != "") {
		$query .= " AND juego_estudio=" . $juego_estudio;
	}
	$result = mysqli_query($con, $query);
	$table = "";
	while ($rs = mysqli_fetch_assoc($result)) {
		$table .= "<tr>";
		$table .= "<td>" . $rs['juego_nombre'] 	. "</td>";
		$table .= "<td>" . $rs['juego_genero'] 	. "</td>";
		$table .= "<td>" . $rs['juego_precio'] 	. "</td>";
		$table .= "<td>" . $rs['juego_estudio'] 	. "</td>";
		$table .= "</tr>";
	}
	mysqli_free_result($result);
	mysqli_close($con);
	return $table;
}

function juegos_menu()
{
	//connect to the database
	$con = connect_db("laboratorios");
	// check connection 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$query = ("	SELECT juego_nombre
				FROM juegos");
	$result = mysqli_query($con, $query);
	$opciones = "";
	while ($rs = mysqli_fetch_assoc($result)) {
		$opciones .= "<option>" . $rs['juego_nombre'] 	. "</option>";
	}
	mysqli_free_result($result);
	mysqli_close($con);
	return $opciones;
}

function generos_menu()
{
	//connect to the database
	$con = connect_db("laboratorios");
	// check connection 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$query = ("	SELECT genero_nombre
				FROM generos");
	$result = mysqli_query($con, $query);
	$opciones = "";
	while ($rs = mysqli_fetch_assoc($result)) {
		$opciones .= "<option>" . $rs['genero_nombre'] 	. "</option>";
	}
	mysqli_free_result($result);
	mysqli_close($con);
	return $opciones;
}


function estudios_menu()
{
	//connect to the database
	$con = connect_db("laboratorios");
	// check connection 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$query = ("	SELECT estudio_nombre
				FROM estudios");
	$result = mysqli_query($con, $query);
	$opciones = "";
	while ($rs = mysqli_fetch_assoc($result)) {
		$opciones .= "<option>" . $rs['estudio_nombre'] 	. "</option>";
	}
	mysqli_free_result($result);
	mysqli_close($con);
	return $opciones;
}








function create_prepared_sentence($query, $con)
{
	if (!($statement = $con->prepare($query))) {
		die("Error al crear una sentencia preparada: (" . $con->errno . ") " . $con->error);
		return 0;
	} else {
		return $statement;
	}
}


function execute_sentence($statement)
{
	if (!$statement->execute()) {
		die("Error al ejecutar la sentencia: (" . $statement->errno . ") " . $statement->error);
		return 0;
	}
}

function juego_insertar($juego_nombre, $juego_genero, $juego_precio, $juego_estudio)
{
	//connect to the database
	$con = connect_db("laboratorios");
	// check connection 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	//crear una sentencia preparada
	$query = ("	INSERT INTO juegos (juego_nombre, juego_genero, juego_precio, juego_estudio) 
				VALUES (?, ?, ?, ?)");
	$statement = create_prepared_sentence($query, $con);
	//ligar parámetros para marcadores 
	if (!$statement->bind_param("ssis", $juego_nombre, $juego_genero, $juego_precio, $juego_estudio)) {
		die("Error en ligar parámetros para marcadores : (" . $statement->errno . ") " . $statement->error);
		return 0;
	}
	//ejecutar la consulta
	execute_sentence($statement);
	mysqli_close($con);
	return 1;
}

function juego_editar($juego_nombre, $juego_genero, $juego_precio, $juego_estudio)
{
	//connect to the database
	$con = connect_db("laboratorios");
	// check connection 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	//crear una sentencia preparada
	$query = ("	UPDATE juegos 
				SET juego_genero = ?, juego_precio = ?, juego_estudio = ?
				WHERE juego_nombre = ?");
	$statement = create_prepared_sentence($query, $con);
	//ligar parámetros para marcadores 
	if (!$statement->bind_param("siss", $juego_genero, $juego_precio, $juego_estudio, $juego_nombre)) {
		die("Error en ligar parámetros para marcadores : (" . $statement->errno . ") " . $statement->error);
		return 0;
	}
	//ejecutar la consulta
	execute_sentence($statement);
	mysqli_close($con);
	return 1;
}

function juego_eliminar($juego_nombre)
{
	//connect to the database
	$con = connect_db("laboratorios");
	// check connection 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	//crear una sentencia preparada
	$query = ("	DELETE FROM juegos 
				WHERE juego_nombre = ?");
	$statement = create_prepared_sentence($query, $con);
	//ligar parámetros para marcadores 
	if (!$statement->bind_param("s", $juego_nombre)) {
		die("Error en ligar parámetros para marcadores : (" . $statement->errno . ") " . $statement->error);
		return 0;
	}
	//ejecutar la consulta
	execute_sentence($statement);
	mysqli_close($con);
	return 1;
}
