<?php

include_once('../model/db.php');

//return teams as an array of teams (name, score)
function getAllTeams(){
    /*for testing purposes only, replace with request to db
    return array(
        array("name" => "Usine", "score" => 2000),
        array("name" => "Abattoirs", "score" => 1000),
        array("name" => "Caserne", "score" => 1200),
        array("name" => "Asile", "score" => 5000),
        array("name" => "Zombie", "score" => -10000)
    );*/

    $link = connect();
    $res = mysqli_query($link, 'select `id`, `name`, `score` from teams;');

    return fetch_result($res);
}

//return all information (stats) about the team as an array (....)
function getTeamById($teamId){
    $link = connect();
    $res = mysqli_query($link, 'select id`, `name`, `score` from teams where `id`='. $teamId .';');

    return fetch_result($res);
}


//return all information (stats) about the team as an array (....)
function getTeamIdByName($teamName){
    $link = connect();
    $res = mysqli_query($link, 'select id from teams where `name`="'. $teamName .'";');

    return fetch_result($res);
}

//returns true if edition succeeded, false otherwise
//points can be positive or negative
//another function should be called to increase/decrease counters
//cause is a string (for logs)
function editTeamScore($teamId, $points, $cause){
    $link = connect();
    mysqli_query($link, 'update teams set `score`=`score` + '. $points .' where `id`='. $teamId .';');

    return mysqli_affected_rows($link);
}

//returns true if edition succeeded, false otherwise
//points can be positive or negative
function addBonusMalusToTeam($teamId, $cause){
    //log or other action before editing player's score
    $link = connect();
	
	mysqli_query($link, 'insert into specialTeamLog(causeId, teamId, scoreImpact) VALUES ('.$cause['id'].', '.$teamId.', '.$cause['value'].');') or die(mysqli_error($link));
    return mysqli_affected_rows($link);
}

//see if necessary or if getTeamByName/getAllTeams gives all stats
function getNbMainObjectsFound($teamId){
    $link = connect();
    $res = mysqli_query($link, 'select nbMainObjectsFoundByPlayers as nb from teams where `id`="'. $teamId .'";');

    return fetch_result($res);
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
function increaseNbLivesTakenByPlayers($teamId, $nbLives){
    $link = connect();
    mysqli_query($link, 'update teams set `nbLivesTakenByPlayers`=`nbLivesTakenByPlayers`+'. $nbLives .' where `id`='. $teamId .';');

    return mysqli_affected_rows($link);
}
function increaseNbPlayersArrested($teamId){
	$link = connect();
    mysqli_query($link, 'update teams set `nbPlayersArrested`=`nbPlayersArrested`+1 where `id`='. $teamId .';');

    return mysqli_affected_rows($link);

}
function increaseNbPlayersLost($teamLoserId){
	$link = connect();
    mysqli_query($link, 'update teams set `nbPlayersLost`=`nbPlayersLost`+1 where `id`='. $teamLoserId .';');

    return mysqli_affected_rows($link);

}
function increaseNbPlayersWon($teamWinnerId){
	$link = connect();
    mysqli_query($link, 'update teams set `nbPlayersWon`=`nbPlayersWon`+1 where `id`='. $teamWinnerId .';');

    return mysqli_affected_rows($link);
}
function increaseNbEnemyLivesBroughtByPlayers($teamId, $nbLives){
	$link = connect();
    mysqli_query($link, 'update teams set `nbEnemyLivesBroughtByPlayers`=`nbEnemyLivesBroughtByPlayers`+'.$nbLives.' where `id`='. $teamId .';');

    return mysqli_affected_rows($link);

}
function increaseNbPlayersDeaths($teamLoserId){
	$link = connect();
    mysqli_query($link, 'update teams set `nbPlayersDeaths`=`nbPlayersDeaths`+1 where `id`='. $teamLoserId .';');

    return mysqli_affected_rows($link);

}
function increaseNbKillsByPlayers($teamWinnerId){
	$link = connect();
    mysqli_query($link, 'update teams set `nbKillsByPlayers`=`nbKillsByPlayers`+1 where `id`='. $teamWinnerId .';');

    return mysqli_affected_rows($link);
}
function increaseNbMainObjectsFoundByPlayers($teamId){
    $link = connect();
    mysqli_query($link, 'update teams set `nbMainObjectsFoundByPlayers`=`nbMainObjectsFoundByPlayers`+1 where `id`='. $teamId .';');

    return mysqli_affected_rows($link);
}

?>
