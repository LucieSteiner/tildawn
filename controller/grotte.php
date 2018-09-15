<?php
require('../controller/common.php');
require('../model/messages.php');

/* Fonctions Bureau du savoir / Grotte 
- top5PlayersAllTeams
- top5PlayersByTeam
*/

function topPlayersAllTeams($players, $nb, $teams, $teamSpecial, $special){
	return topPlayers($nb, $players, $teams, $teamSpecial, $special);
}

function topPlayersByTeam($players, $teamId, $nb, $teams, $teamSpecial, $special){
	
	return topPlayers($nb, $players, $teams, $teamSpecial, $special);
}

function getActiveMessages(){
	return getAllActiveMessages();
}
function getActiveAlerts(){
	return getAllActiveAlerts();
}


?>