<?php
require("../model/players.php");
require("../model/teams.php");
require("../model/objects.php");


function getPlayers(){	
	return getAllPlayers();
}

function getPlayer($playerId){
	return getPlayerById($playerId);
}

function calculateWeightedScore($playerScore, $teamScore){
	$weightedScore = (0.5 * $playerScore) + (0.5 * $teamScore);
	return $weightedScore;
}

function getTeams(){
	return getAllTeams();
	
}

function getObjects(){
	return getAllObjects();
}

//returns an array of players (id, firstname, lastname, team, score
function topPlayers($nb, $players){
	
	$to_sort = array();
	$firstname = array();
	$lastname = array();
	$team = array();
	foreach ($players as $player){
		$to_sort[$player['id']] = calculateWeightedScore($player['score'], $player['teamScore']);
		$firstname[$player['id']] = $player['firstname'];
		$lastname[$player['id']] = $player['lastname'];
		$team[$player['id']] = $player['team'];
	}
    arsort($to_sort);
	$top = array_slice($to_sort, 0, $nb, true);
	$result = array();
	foreach($top as $id => $score){
		array_push($result, array("id" => $id, "firstname" => $firstname[$id], "lastname" => $lastname[$id], "team" => $team[$id], "score" => $score));
		
	}
	return $result;
}
function topTeams(){
	$teams = getAllTeams();
	$to_sort = array();
	foreach ($teams as $team){
		$to_sort[$team['name']] = $team['score'];
	}
	arsort($to_sort);
	$result = array();
	foreach($to_sort as $id => $score){
		array_push($result, array("id" => $id, "score" => $score));
		
	}
	return $result;
	return $to_sort;
	
}
?>