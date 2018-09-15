<?php


require("../model/causes.php");
require("../model/messages.php");
require("../controller/common.php");


//Dashboard
function getBestTeamScore(){
	$special = getAllTeamSpecial();
	
	$max = $special[0]['total'];
	for($i = 0; $i < count($special); $i++){
		if($special[$i]['total'] > $max){
			$max = $special[$i]['total'];
		}
		
	}
	return $max;

	
}

//Dashboard
function getBestPlayerScore(){
	$special = getAllPlayerSpecial();
	$max = $special[0]['total'];
	for($i = 0; $i < count($special); $i++){
		if($special[$i]['total'] > $max){
			$max = $special[$i]['total'];
		}
	}
	return $max;

	
}

//Dashboard
function getNbActiveAlerts(){
	return countActiveAlerts()[0]['nb'];
	
}

//Dashboard
function getNbActiveMessages(){

	return countActiveMessages()[0]['nb'];

}

//Dashboard
function getNbFoundObjects(){
	return countFoundObjects()[0]['nb'];
	
}

//Dashboard
function getNbCauses(){
	return countCauses()[0]['nb'];
}

//Dashboard
function getNbPlayersByTeam(){
	return countPlayersByTeam();
	
}

//Causes
function getCauses(){
	return getAllCauses();
	
}



//Messages and alerts
function getMessages(){
	return getAllMessages();
}
function getAlerts(){
	return getAllAlerts();
}


?>