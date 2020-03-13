<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST["nombre"])){
		die();
	}
	
	
} else {
	exit('Invalid Request');
}



echo "hello";
?>