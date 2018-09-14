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
	$counter = 0;
	$alerts = getAllAlerts();
	foreach($alerts as $alert){
		if($alert['status'] == "Active"){
			$counter += 1;
		}
	}
	return $counter;
	
}

//Dashboard
function getNbActiveMessages(){
	$counter = 0;
	$messages = getAllMessages();
	foreach($messages as $message){
		if($message['status'] == "Active"){
			$counter += 1;
		}
	}
	return $counter;
}

//Dashboard
function getNbFoundObjects(){
	$counter = 0;
	$objects = getAllObjects();
	foreach ($objects as $object){
		if ($object["foundby"] != NULL){
			$counter += 1;
		}
	}
	return $counter;
	
}

//Dashboard
function getNbCauses(){
	$causes = getAllCauses();
	return count($causes);
}

//Dashboard
function getNbPlayersByTeam(){
	$teams = getAllTeams();
	$players = getAllPlayers();
	$result = array();
	foreach ($teams as $team){
	    $result[$team['name']] = 0;
	    foreach ($players as $player){
		    if($player['team'] == $team['name']){
				$result[$team['name']] += 1;
			}
		}
	}
	
	return $result;
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