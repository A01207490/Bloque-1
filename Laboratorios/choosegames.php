<?php
require_once("util.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST["name"])){
		$name = htmlspecialchars($_POST["name"]);
		$company = htmlspecialchars($_POST["company"]);
		
		if (isset($_POST["type1"])){
			$type1 = htmlspecialchars($_POST["type1"]);
		}else{
			$type1 = NULL;
		}
		if (isset($_POST["type2"])){
			$type2 = htmlspecialchars($_POST["type2"]);
		}else{
			$type2 = NULL;
		}
		
		include '_head.html';
		include '_sidebar.html';_

		var_dump($_POST);
		
		match($name, $company, $type1, $type2);

		include '_footer.html';

	}else{
		die();
	}

} else {
	exit('Invalid Request');
}

?>