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

function calculateWeightedScore($player){
	$teams = getAllTeams();
	$teamScore = 0;
	foreach($teams as $team){
		if($player['team'] == $team['name']){
			$teamScore = $team['score'];
		}
	}
	$weightedScore = (0.5 * $player['score']) + (0.5 * $teamScore);
	return $weightedScore;
}

function getTeams(){
	return getAllTeams();
	
}

function getObjects(){
	return getAllObjects();
}
?>