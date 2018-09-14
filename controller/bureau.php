<?php
require("../controller/common.php");

//player and team lose points
function buyLives($playerId, $nbLives){
	$valuePlayer = -15;
	$valueTeam = -7;
	
	$teamId = getPlayerById($playerId)[0]['teamId'];
	
	increaseNbOwnLivesTaken($playerId, $nbLives);
	increaseNbLivesTakenByPlayers($teamId, $nbLives);
	editPlayerScore($playerId, $nbLives*$valuePlayer, "own-lives-taken");
	editTeamScore($teamId, $nbLives*$valueTeam, "own-lives_taken");
}
//arrested: player and team lose points
//arrest: player wins points
function getArrested($loserId, $winnerId){
	$valueLoser = -150;
	$valueLoserTeam = -150;
	$valueWinner = 100;
	
	$teamId = getPlayerById($loserId)[0]['teamId'];
	echo $teamId;
	increaseNbTimesArrested($loserId);
	increaseNbPlayersArrested($teamId);
	increaseNbCheatersCaught($winnerId);
	
	editPlayerScore($loserId, $valueLoser, "cheated");
	editTeamScore($teamId, $valueLoserTeam, "cheated");
	editPlayerScore($winnerId, $valueWinner, "caught-cheater");
}

//player lose points
function getAmuletBack($playerId){
	$valuePlayer = -50;
	
	increaseNbAmuletsTaken($playerId);
	
	editPlayerScore($playerId, $valuePlayer, "own-amulet-taken");
}

//loser: player and team lose points
//winner: player and team win points
function changeTeam($loserId, $winnerId){
	$valueLoser = -50;
	$valueLoserTeam = -50;
	$valueWinner = 100;
	$valueWinnerTeam = 50;
	
	$teamLoserId = getPlayerById($loserId)[0]['teamId'];
	$teamWinnerId = getPlayerById($winnerId)[0]['teamId'];
	
	increaseNbTimesTransformed($loserId);
	increaseNbPlayersLost($teamLoserId);
	increaseNbPlayersTransformed($winnerId);
	increaseNbPlayersWon($teamWinnerId);
	
	editPlayerScore($loserId, $valueLoser, "got-transformed");
	editTeamScore($teamLoserId, $valueLoserTeam, "lost-player");
	editPlayerScore($winnerId, $valueWinner, "transformed-player");
	editTeamScore($teamWinnerId, $valueWinnerTeam, "won-player");
	
	changePlayerTeam($loserId, $teamWinnerId);
}

//player and team win points
function bringLives($playerId, $nbLives){
	$valuePlayer = 10;
	$valueTeam = 5;
	
	$teamId = getPlayerById($playerId)[0]['teamId'];

    increaseNbEnemyLivesGiven($playerId, $nbLives);
	increaseNbEnemyLivesBroughtByPlayers($teamId, $nbLives);
	
	editPlayerScore($playerId, $nbLives*$valuePlayer, "brought-lives");
	editTeamScore($teamId, $nbLives*$valueTeam, "brought-lives");
	
}

//loser: player and team lose points
//winner: player and team win points
function bringAmulet($playerId, $amulet){
	$valueLoser = -50; 
	$valueLoserTeam = -50;
	$valueWinner = 70;
	
	$winnerId = $playerId;
	$loserId = getPlayerIdByAmulet($amulet)[0]['id'];
	$nbDeaths = getPlayerById($loserId)[0]['nbDeaths']; 
	echo $nbDeaths;
	for($i = 0; $i < $nbDeaths; $i++){
		$valueWinner = round($valueWinner - $valueWinner/4);
	}
	echo $valueWinner; 
	$valueWinnerTeam = $valueWinner/2;
	
	$teamLoserId = getPlayerById($loserId)[0]['teamId'];
	$teamWinnerId = getPlayerById($winnerId)[0]['teamId'];
	
	increaseNbDeaths($loserId);
	increaseNbPlayersDeaths($teamLoserId);
	increaseNbKills($winnerId);
	increaseNbKillsByPlayers($teamWinnerId);
	
	editPlayerScore($loserId, $valueLoser, "death");
	editTeamScore($teamLoserId, $valueLoserTeam,"death");
	editPlayerScore($winnerId, $valueWinner, "kill");
	editTeamScore($teamWinnerId, $valueWinnerTeam, "kill");
}

//player + 2 max win points, team win points
function bringObject($playersId, $objectId){
	$object = getObjectById($objectId)[0];
	$valuePlayer = $object['value'];
	$valueTeam = $valuePlayer;
	$teamId = getPlayerById($playersId[0])[0]['teamId'];
	
	$nbObjectsArray = getNbMainObjectsFound($teamId);
	$nbObjects = $nbObjectsArray[0]['nb'];
	if($object['main'] == 1){
		$valueTeam += (20 * pow(2, $nbObjects));
		increaseNbMainObjectsFoundByPlayers($teamId);
	}
	$valueByPlayer = $valuePlayer/count($playersId);
	foreach($playersId as $playerId){
		increaseNbObjectsFound($playerId);
		editPlayerScore($playerId, $valueByPlayer, "object");
	}
	
	editTeamScore($teamId, $valueTeam, "object");
	
	editObject($object['id'], $object['name'], $object['value'], $teamId);
	
}






?>