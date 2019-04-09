<?php


require("../model/causes.php");
require("../model/messages.php");
require("../controller/common.php");


//Dashboard
function getBestTeamScore(){
	$special = getAllTeamSpecial();
	$teams = getAllTeams();	
	$max = $special[0]['total'] + $teams[0]['score'];
	for($i = 0; $i < count($special); $i++){
		if(($special[$i]['total']+ $teams[$i]['score']) > $max){
			$max = $special[$i]['total'] + $teams[$i]['score'];
		}
		
	}
	return $max;

	
}

//Dashboard
function getBestPlayerScore(){
	$special = getAllPlayerSpecial();
	$players = getAllPlayers();
	$max = $special[0]['total']+$players[0]['score'];
	for($i = 0; $i < count($special); $i++){
		if(($special[$i]['total']+$players[$i]['score']) > $max){
			$max = $special[$i]['total']+$players[$i]['score'];
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
