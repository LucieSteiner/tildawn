<?php

//returns players as an array of players (.....
function getAllPlayers(){
	
}

//returns player as an array (id, amulet, firstname, lastname, .... TODO: complete)
function getPlayerById(){
	
}
//returns true if edition succeeded, false otherwise
//points can be positive or negative
//another function should be called to increase/decrease counters 
function editPlayerScore($playerId, $points, $cause){
	return True;
}

//returns true if edition succeeded, false otherwise
function setPlayerAmulet(){
	
}

//returns true if edition succeeded, false otherwise
//points can be positive or negative 
function addBonusMalusToPlayer($playerId, $cause){
	//log or other action before editing player's score
	return editPlayerScore($playerId, $cause['value'], $cause['name']);
}

?>