<?php 

function match($name, $company, $type1, $type2) {
	if($company == "nintendo"){
		$openworld = "resources/images/breatheofthewild.jpg";
		$openworldtext = "The Legend of Zelda Breathe of the Wild";
		$hackandslash = "resources/images/astralchain.jpg";
		$hackandslashtext = "Astral Chain";
	}else{
		$openworld = "resources/images/horizonzerodawn.jpg";
		$openworldtext = "Horizon Zero Dawn";
		$hackandslash = "resources/images/devilmaycry5.jpg";
		$hackandslashtext = "Devil May Cry 5";
	}

	include("_matchabove.html");
	if($type1 == "openworld"){	
		include("_openworldcard.html");
	}	
	if($type2 == "hackandslash"){
		include("_hackandslashcard.html");
	}
	include("_matchbelow.html");

}


?> 