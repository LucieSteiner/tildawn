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

    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select `id`, `name`, `score` from teams;');

    return fetch_result($res);
}

//return all information (stats) about the team as an array (....)
function getTeamById($teamId){
    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select id`, `name`, `score` from teams where `id`='. $teamId .';');

    return fetch_result($res);
}


//return all information (stats) about the team as an array (....)
function getTeamIdByName($teamName){
    //$GLOBALS['GLOBALS['link']'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select id from teams where `name`="'. $teamName .'";');

    return fetch_result($res);
}

//returns true if edition succeeded, false otherwise
//points can be positive or negative
//another function should be called to increase/decrease counters
//cause is a string (for logs)
function editTeamScore($teamId, $points, $cause){
    //$GLOBALS['GLOBALS['link']'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `score`=`score` + '. $points .' where `id`='. $teamId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}

//returns true if edition succeeded, false otherwise
//points can be positive or negative
function addBonusMalusToTeam($teamId, $cause){
    //log or other action before editing player's score
    //$GLOBALS['link'] = connect();
	
	mysqli_query($GLOBALS['link'], 'insert into specialTeamLog(causeId, teamId, scoreImpact) VALUES ('.$cause['id'].', '.$teamId.', '.$cause['value'].');') or die(mysqli_error($GLOBALS['link']));
    return mysqli_affected_rows($GLOBALS['link']);
}

function getSpecialByTeam($teamId){
	//$GLOBALS['link'] = connect();
	$res = mysqli_query($GLOBALS['link'], 'select SUM(scoreImpact) as total from SpecialTeamLog where teamId='.$teamId.';');
	if($res == False){
		return array("total"=>0);
	}
	return fetch_result($res);
	
	}
function getSpecialAllTeams(){
	//$GLOBALS['link'] = connect();
	$res = mysqli_query($GLOBALS['link'], 'select teams.id as id, SUM(scoreImpact) as total from SpecialTeamLog RIGHT JOIN teams ON specialTeamLog.teamId = teams.id group by teams.id;');
	return fetch_result($res);
	}
//see if necessary or if getTeamByName/getAllTeams gives all stats
function getNbMainObjectsFound($teamId){
    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select nbMainObjectsFoundByPlayers as nb from teams where `id`="'. $teamId .'";');

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
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `nbLivesTakenByPlayers`=`nbLivesTakenByPlayers`+'. $nbLives .' where `id`='. $teamId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbPlayersArrested($teamId){
	//$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `nbPlayersArrested`=`nbPlayersArrested`+1 where `id`='. $teamId .';');

    return mysqli_affected_rows($GLOBALS['link']);

}
function increaseNbPlayersLost($teamLoserId){
	//$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `nbPlayersLost`=`nbPlayersLost`+1 where `id`='. $teamLoserId .';');

    return mysqli_affected_rows($GLOBALS['link']);

}
function increaseNbPlayersWon($teamWinnerId){
	//$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `nbPlayersWon`=`nbPlayersWon`+1 where `id`='. $teamWinnerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbEnemyLivesBroughtByPlayers($teamId, $nbLives){
	//$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `nbEnemyLivesBroughtByPlayers`=`nbEnemyLivesBroughtByPlayers`+'.$nbLives.' where `id`='. $teamId .';');

    return mysqli_affected_rows($GLOBALS['link']);

}
function increaseNbPlayersDeaths($teamLoserId){
	//$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `nbPlayersDeaths`=`nbPlayersDeaths`+1 where `id`='. $teamLoserId .';');

    return mysqli_affected_rows($GLOBALS['link']);

}
function increaseNbKillsByPlayers($teamWinnerId){
	//$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `nbKillsByPlayers`=`nbKillsByPlayers`+1 where `id`='. $teamWinnerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbMainObjectsFoundByPlayers($teamId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update teams set `nbMainObjectsFoundByPlayers`=`nbMainObjectsFoundByPlayers`+1 where `id`='. $teamId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}

?>
