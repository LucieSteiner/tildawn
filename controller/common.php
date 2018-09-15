<?php
require("../model/players.php");
require("../model/teams.php");
require("../model/objects.php");
error_reporting(E_ALL ^ E_NOTICE); 


function getPlayers(){	
	return getAllPlayers();
}

function getPlayer($playerId){
	return getPlayerById($playerId);
}

function calculateWeightedScore($playerScore, $teamScore){
	$weightedScore = round((0.5 * $playerScore) + (0.5 * $teamScore));
	return $weightedScore;
}

function getTeams(){
	return getAllTeams();
	
}
function getTeam($teamId){
	return getTeamById($teamId);
}

function getObjects(){
	return getAllObjects();
}

//returns an array of players (id, firstname, lastname, team, score
function topPlayers($nb, $players, $teams, $specialTeam, $special){
	$to_sort = array();
	$firstname = array();
	$lastname = array();
	$team = array();
	foreach ($players as $player){
		$to_sort[$player['id']] = calculateWeightedScore($special[$player['id']-1]['total'] + $player['score'], $specialTeam[$player['teamId']-1]['total']+$teams[$player['teamId']-1]['score']);
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
function topTeams($teams, $special){
	$to_sort = array();
	foreach ($teams as $team){
		$to_sort[$team['name']] = $special[$team['id']-1]['total']+ $team['score'];
	}
	arsort($to_sort);
	$result = array();
	foreach($to_sort as $id => $score){
		array_push($result, array("id" => $id, "score" => $score));
		
	}
	return $result;
	return $to_sort;
	
}
function getPlayerScoreWithSpecial($player){
	return $player['score'] + getSpecialByPlayer($player['id'])[0]['total'];
}
function getTeamScoreWithSpecial($team){
	return $team['score'] + getSpecialByTeam($team['id'])[0]['total'];
}
function getAllPlayerSpecial(){
	return getSpecialAllPlayers();
}
function getAllTeamSpecial(){
	return getSpecialAllTeams();
}
?>