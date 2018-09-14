<?php
require('../controller/common.php');
require('../model/messages.php');

/* Fonctions Bureau du savoir / Grotte 
- top5PlayersAllTeams
- top5PlayersByTeam
*/

function topPlayersAllTeams($nb){
	$players = getAllPlayers();
	return topPlayers($nb, $players);
}

function topPlayersByTeam($teamId, $nb){

	$players = getPlayersByTeam($teamId);
	
	return topPlayers($nb, $players);
}

function getActiveMessages(){
	return getAllActiveMessages();
}
function getActiveAlerts(){
	return getAllActiveAlerts();
}


?>