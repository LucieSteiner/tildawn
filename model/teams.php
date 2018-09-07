<?php

//return teams as an array of teams (name, score)
function getAllTeams(){
	//for testing purposes only, replace with request to db
	return array(
		array("name" => "Usine", "score" => 2000),
		array("name" => "Abattoirs", "score" => 1000),
		array("name" => "Caserne", "score" => 1200),
		array("name" => "Asile", "score" => 5000),
		array("name" => "Zombie", "score" => -10000)
	);
	
}

//return all information (stats) about the team as an array (....)
function getTeamByName($name){
	
}

//returns true if edition succeeded, false otherwise
//points can be positive or negative
//another function should be called to increase/decrease counters 
//cause is a string (for logs)
function editTeamScore($teamName, $points, $cause){
	return True;
}


//returns true if edition succeeded, false otherwise
//points can be positive or negative 
function addBonusMalusToTeam($teamName, $cause){
	//log or other action before editing player's score
	return editTeamScore($teamName, $cause['value'], $cause['name']);
}

//see if necessary or if getTeamByName/getAllTeams gives all stats
function getNbMainObjectsFound($teamName){
	
}

/* 
Compteurs: 
-----------
- nbLivesTakenByPlayers
- nbPlayersArrested
- nbPlayersLost
- nbPlayersWon
- nbEnemyLivesBroughtByPlayers
- nbPlayersDeaths
- nbKillsByPlayers
- nbMainObjectsFoundByPlayers
*/

function increaseNbLivesTakenByPlayers($teamName, $nbLives){
	
}

function increaseNbPlayersArrested($teamName){
	
}

function increaseNbPlayersLost($teamNameLoser){
	
}

function increaseNbPlayersWon($teamWinnerId){
	
}

function increaseNbEnemyLivesBroughtByPlayers($teamName, $nbLives){
	
}

function increaseNbPlayersDeaths($teamLoserName){
	
}

function increaseNbKillsByPlayers($teamWinnerName){
	
}

function increaseNbMainObjectsFoundByPlayers($teamName){
	
}
?>