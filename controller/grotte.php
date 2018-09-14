<?php
require('../controller/common.php');

/* Fonctions Bureau du savoir / Grotte 
- top5PlayersAllTeams
- top5PlayersByTeam
*/
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
function topPlayersAllTeams($nb){
	$players = getAllPlayers();
	return topPlayers($nb, $players);
}

function topPlayersByTeam($teamId, $nb){

	$players = getPlayersByTeam($teamId);
	
	return topPlayers($nb, $players);
}

?>