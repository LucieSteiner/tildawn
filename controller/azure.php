<?php


require("../model/causes.php");
require("../model/messages.php");
require("../controller/common.php");


//Dashboard
function getBestTeamScore(){
	$teams = getAllTeams();
	if(count($teams) > 0){
		$max = $teams[0]['score'];
		foreach($teams as $team){
			if($team['score'] > $max){
				$max = $team['score'];
			}
			
		}
		return $max;
	}
	return 0;
	
}

//Dashboard
function getBestPlayerScore(){
	$players = getAllPlayers();
	if(count($players) > 0){
		$max = $players[0]['score'];
		foreach($players as $player){
			if($player['score'] > $max){
				$max = $player['score'];
			}
		}
		return $max;
	}
	return 0;
	
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
function getCauses($category){
	$result = array();
	$causes = getAllCauses();
	if($category == null){
		$result = $causes;
	}
	
	if($category == "Bonus"){
		foreach($causes as $cause){
			if($cause["category"] == "Bonus"){
				array_push($result, $cause);
			}
		}
	}
	else if($category == "Malus"){
		foreach($causes as $cause){
			if($cause["category"] == "Malus"){
				array_push($result, $cause);
			}
		}
	}
	return $result;
	
}



//Messages and alerts
function getMessages(){
	return getAllMessages();
}
function getAlerts(){
	return getAllAlerts();
}

?>