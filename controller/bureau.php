<?php
require("../controller/common.php");

//player and team lose points
function buyLives($playerId, $nbLives){
	$valuePlayer = -15;
	$valueTeam = -7;
	
	$teamName = getPlayerById($playerId)['team'];
	
	increaseNbOwnLivesTaken($playerId, $nbLives);
	increaseNbLivesTakenByPlayers($teamName, $nbLives);
	editPlayerScore($playerId, $nbLives*$valuePlayer, "own-lives-taken");
	editTeamScore($teamName, $nbLives*$valueTeam, "own-lives_taken");
}
//arrested: player and team lose points
//arrest: player wins points
function getArrested($loserId, $winnerId){
	$valueLoser = -150;
	$valueLoserTeam = -150;
	$valueWinner = 100;
	
	$teamName = getPlayerById($loserId)['team'];
	
	increaseNbTimesArrested($loserId);
	increaseNbPlayersArrested($teamName);
	increaseNbCheatersCaught($winnerId);
	
	editPlayerScore($loserId, $valueLoser, "cheated");
	editTeamScore($teamName, $valueLoserTeam, "cheated");
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
	
	$teamNameLoser = getPlayerById($loserId)['team'];
	$teamNameWinner = getPlayerById($winnerId)['team'];
	
	increaseNbTimesTransformed($loserId);
	increaseNbPlayersLost($teamNameLoser);
	increaseNbPlayersTransformed($winnerId);
	increaseNbPlayersWon($teamWinnerId);
	
	editPlayerScore($loserId, $valueLoser, "got-transformed");
	editTeamScore($teamNameLoser, $valueLoserTeam, "lost-player");
	editPlayerScore($winnerId, $valueWinner, "transformed-player");
	editTeamScore($teamNameWinner, $valueWinnerTeam, "won-player");
}

//player and team win points
function bringLives($playerId, $nbLives){
	$valuePlayer = 10;
	$valueTeam = 5;
	
	$teamName = getPlayerById($playerId)['team'];

    increaseNbEnemyLivesGiven($playerId, $nbLives);
	increaseNbEnemyLivesBroughtByPlayers($teamName, $nbLives);
	
	editPlayerScore($playerId, $nbLives*$valuePlayer, "brought-lives");
	editTeamScore($teamName, $nbLives*$valueTeam, "brought-lives");
	
}

//loser: player and team lose points
//winner: player and team win points
function bringAmulet($playerId, $amulet){
	$valueLoser = -50; 
	$valueLoserTeam = -50;
	$valueWinner = 70;
	$nbDeaths = getPlayerById['nbDeaths']; 
	for($i = 0; $i < $nbDeaths; $i++){
		$valueWinner = $valueWinner/4;
	}
	$valueWinnerTeam = $valueWinner/2;
	
	$teamNameLoser = getPlayerById($loserId)['team'];
	$teamNameWinner = getPlayerById($winnerId)['team'];
	
	increaseNbDeaths($loserId);
	increaseNbPlayersDeaths($teamLoserName);
	increaseNbKills($winnerId);
	increaseNbKillsByPlayers($teamWinnerName);
	
	editPlayerScore($loserId, $valueLoser, "death");
	editTeamScore($teamNameLoser, $valueLoserTeam,"death");
	editPlayerScore($winnerId, $valueWinner, "kill");
	editTeamScore($teamNameWinner, $valueWinnerTeam, "kill");
}

//player + 2 max win points, team win points
function bringObject($playersId, $objectId){
	$object = getObjectById($objectId);
	$valuePlayer = $object['value'];
	$valueTeam = $valuePlayer;
	$teamName = getPlayerById($playersId[0])['team'];
	
	$nbObjects = getNbMainObjectsFound($teamName);
	if($object['main'] == 1){
		$valueTeam += (20 * pow(2, $nbObjects));
		increaseNbObjectsFoundByPlayers($teamName);
	}
	$valueByPlayer = $valuePlayer/count($playersId);
	foreach($playerId as $playersId){
		increaseNbObjectsFound($playerId);
		editPlayerScore($playerId, $valueByPlayer, "object");
	}
	
	editTeamScore($teamName, $valueTeam, "object");
	
	editObject($object['id'], $object['name'], $object['value'], $teamName);
	
}






?>