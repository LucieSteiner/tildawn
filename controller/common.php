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
?>