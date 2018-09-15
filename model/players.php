<?php

include_once('../model/db.php');

//returns players as an array of players (id, amulet, firstname, lastname, team, score, gender, group, nbDeaths, nbKills, nbOwnLivesTaken, nbEnemyLivesGiven, nbTimesArrested, NbCheatersCaught)
function getAllPlayers(){
    /*for testing purposes only, must be replaced by a request to db
    $players = array (
        array('id' => 1,'amulet' => 'ABCDE', 'firstname' => 'John', 'lastname' => 'Doe', 'team' => 'Usine', 'score' => 141, 'gender' => 'male', 'group' => 'Sacré-Coeur', 'nbDeaths' => 4, 'nbKills' => 5, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 2,'amulet' => 'JD38R', 'firstname' => 'Harry', 'lastname' => 'Potter', 'team' => 'Asile', 'score' => 567, 'gender' => 'male', 'group' => 'Covatannaz', 'nbDeaths' => 2, 'nbKills' => 1, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 3,'amulet' => 'DH38J', 'firstname' => 'Megan', 'lastname' => 'Fox', 'team' => 'Asile', 'score' => 23456789, 'gender' => 'female', 'group' => 'Grande Ourse', 'nbDeaths' => 1, 'nbKills' => 2, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 4,'amulet' => 'NJ3H7', 'firstname' => 'Nicolas', 'lastname' => 'Rey', 'team' => 'Abattoirs', 'score' => 0, 'gender' => 'male', 'group' => 'Noirmont Gland', 'nbDeaths' => 7, 'nbKills' => 3, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 5, 'amulet' => 'APOE8', 'firstname' => 'Dark', 'lastname' => 'Vador', 'team' => 'Caserne', 'score' => 2000, 'gender' => 'male', 'group' => 'Orbe Union', 'nbDeaths' => 6, 'nbKills' => 4, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 6,'amulet' => 'NCE92', 'firstname' => 'René', 'lastname' => 'Rentsch', 'team' => 'Zombie', 'score' => 100, 'gender' => 'male', 'group' => 'Montbenon', 'nbDeaths' => 3, 'nbKills' => 5, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 7,'amulet' => 'BD378', 'firstname' => 'Donald', 'lastname' => 'Trump', 'team' => 'Asile', 'score' => 3004, 'gender' => 'male', 'group' => 'Gros de Vaud', 'nbDeaths' => 4, 'nbKills' => 0, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 8,'amulet' => 'DN388', 'firstname' => 'Baden', 'lastname' => 'Powell', 'team' => 'Zombie', 'score' => 42, 'gender' => 'male', 'group' => 'La Venoge', 'nbDeaths' => 1, 'nbKills' => 4, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 9,'amulet' => '3DJ31', 'firstname' => 'John', 'lastname' => 'Smith', 'team' => 'Caserne', 'score' => 788, 'gender' => 'male', 'group' => 'Covatannaz', 'nbDeaths' => 0, 'nbKills' => 2, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 10,'amulet' => 'QWERT', 'firstname' => 'Prince', 'lastname' => 'Charmant', 'team' => 'Abattoirs', 'score' => 1000, 'gender' => 'male', 'group' => 'TDGL', 'nbDeaths' => 9, 'nbKills' => 1, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 11,'amulet' => 'ND3U0', 'firstname' => 'Johnny', 'lastname' => 'Depp', 'team' => 'Usine', 'score' => 5000, 'gender' => 'male', 'group' => 'Plantour', 'nbDeaths' => 0, 'nbKills' => 10, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 12,'amulet' => 'CNA92', 'firstname' => 'Fée', 'lastname' => 'Clochette', 'team' => 'Asile', 'score' => 18219, 'gender' => 'female', 'group' => 'La Croisée', 'nbDeaths' => 1, 'nbKills' => 3, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 13,'amulet' => 'DFGHJ', 'firstname' => 'Peter', 'lastname' => 'Pan', 'team' => 'Zombie', 'score' => 1212, 'gender' => 'male', 'group' => 'Lavaux', 'nbDeaths' => 2, 'nbKills' => 5, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 14,'amulet' => 'TZUET', 'firstname' => 'Capitaine', 'lastname' => 'Crochet', 'team' => 'Caserne', 'score' => 10293, 'gender' => 'male', 'group' => 'Lac-Bleu', 'nbDeaths' => 3, 'nbKills' => 2, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 15,'amulet' => 'GED73', 'firstname' => 'Schtroumpf', 'lastname' => 'Costaud', 'team' => 'Abattoirs', 'score' => 10, 'gender' => 'male', 'group' => 'Saleuscex', 'nbDeaths' => 0, 'nbKills' => 0, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 16,'amulet' => '2EJ23', 'firstname' => 'Castor', 'lastname' => 'Baraqué', 'team' => 'Usine', 'score' => 1029, 'gender' => 'male', 'group' => 'Trois-Jetées', 'nbDeaths' => 5, 'nbKills' => 4, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 17,'amulet' => 'EO231', 'firstname' => 'Ta', 'lastname' => 'Mère', 'team' => 'Zombie', 'score' => 20000, 'gender' => 'female', 'group' => 'La Harpe', 'nbDeaths' => 4, 'nbKills' => 3, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 18,'amulet' => 'XNEU1', 'firstname' => 'Kylo', 'lastname' => 'Ren', 'team' => 'Caserne', 'score' => 2049, 'gender' => 'male', 'group' => 'Vieux Mazel', 'nbDeaths' => 4, 'nbKills' => 4, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 19,'amulet' => 'R3U9F', 'firstname' => 'Frodon', 'lastname' => 'Sacquet', 'team' => 'Asile', 'score' => 5000, 'gender' => 'male', 'group' => 'Scanavin', 'nbDeaths' => 0, 'nbKills' => 9, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 20,'amulet' => 'POS12', 'firstname' => 'Darlene', 'lastname' => 'Alderson', 'team' => 'Zombie', 'score' => 100000, 'gender' => 'female', 'group' => 'Pierre-de-Grinus', 'nbDeaths' => 1, 'nbKills' => 2, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 21,'amulet' => 'E3Z71', 'firstname' => 'Bobby', 'lastname' => 'Bobby', 'team' => 'Abattoirs', 'score' => 1927, 'gender' => 'male', 'group' => 'Grand Chêne', 'nbDeaths' => 1, 'nbKills' => 1, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 22,'amulet' => 'JE319', 'firstname' => 'Père', 'lastname' => 'Noël', 'team' => 'Usine', 'score' => 100, 'gender' => 'male', 'group' => 'La Roselière', 'nbDeaths' => 2, 'nbKills' => 7, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 23,'amulet' => 'DH382', 'firstname' => 'Napoléon', 'lastname' => 'Bonaparte', 'team' => 'Zombie', 'score' => 600, 'gender' => 'male', 'group' => 'La Venoge', 'nbDeaths' => 3, 'nbKills' => 4, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 24,'amulet' => '2WD32', 'firstname' => 'Mère', 'lastname' => 'Grand', 'team' => 'Caserne', 'score' => 700, 'gender' => 'female', 'group' => 'Lavaux', 'nbDeaths' => 4, 'nbKills' => 2, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 25,'amulet' => 'DJ310', 'firstname' => 'Mister', 'lastname' => 'Darcy', 'team' => 'Abattoirs', 'score' => 2500, 'gender' => 'male', 'group' => 'Grande Ourse', 'nbDeaths' => 1, 'nbKills' => 0, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 26,'amulet' => 'DHA23', 'firstname' => 'Elisabeth', 'lastname' => 'Bennett', 'team' => 'Usine', 'score' => 6000, 'gender' => 'female', 'group' => 'Orbe Union', 'nbDeaths' => 0, 'nbKills' => 7, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 27,'amulet' => '00000', 'firstname' => 'Alice', 'lastname' => 'Alice', 'team' => 'Zombie', 'score' => -1500, 'gender' => 'female', 'group' => 'Scanavin', 'nbDeaths' => 12, 'nbKills' => 4, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2),
        array('id' => 28,'amulet' => '11111', 'firstname' => 'Bob', 'lastname' => 'Bob', 'team' => 'Asile', 'score' => 200, 'gender' => 'male', 'group' => 'Plantour', 'nbDeaths' => 14, 'nbKills' => 3, 'nbOwnLivesTaken' => 12, 'nbEnemyLivesGiven' => 3, 'nbTimesArrested' => 0, 'nbCheatersCaught' => 2)
    );*/

    //$GLOBALS['link'] = connect();
	//trop long, à voir
    $res = mysqli_query($GLOBALS['link'], 'select players.id as id, amulet, firstname, lastname, teams.name as team, players.teamId as teamId, players.score as score, teams.score as teamScore, gender, `group`, nbDeaths, nbKills, nbOwnLivesTaken, nbEnemyLivesGiven, nbTimesArrested, NbCheatersCaught from players INNER JOIN teams ON players.teamId = teams.id;');
    //$res = mysqli_query($GLOBALS['link'], 'select id, amulet, firstname, lastname, teamId as team, score, gender, `group`, nbDeaths, nbKills, nbOwnLivesTaken, nbEnemyLivesGiven, nbTimesArrested, NbCheatersCaught from players;');
    //$res = mysqli_query($GLOBALS['link'], 'select * from players;');
    return fetch_result($res);
}


//returns player as an array (id, amulet, firstname, lastname, team, score, gender, group, nbDeaths, nbKills, nbOwnLivesTaken, nbEnemyLivesGiven, nbTimesArrested, NbCheatersCaught)
function getPlayerById($playerId){
    /*for testing purposes only, must be replaced by request to db
    $players = getAllPlayers();
    foreach($players as $player){
        if($player['id'] == $playerId){
            return $player;
        }
    }*/

    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], "select players.id as id, amulet, firstname, lastname, teams.name as team, players.teamId as teamId, players.score as score, teams.score as teamScore, gender, `group`, nbDeaths, nbKills, nbOwnLivesTaken, nbEnemyLivesGiven, nbTimesArrested, nbCheatersCaught from players INNER JOIN teams ON players.teamId = teams.id WHERE players.id = '". $playerId . "';");
    

    return fetch_result($res);
}


//returns player id or null if amulet does not exist
function getPlayerIdByAmulet($amulet){
    /*for testing purposes only, must be replaced by request to db
    $players = getAllPlayers();
    foreach($players as $player){
        if($player['amulet'] == $amulet){
            return $player['id'];
        }
    }*/

    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], "select id from players where `amulet`='$amulet';") or die(mysqli_error($GLOBALS['link']));
    echo mysqli_error($GLOBALS['link']);
    return fetch_result($res);
}
function getPlayersByTeam(){
	//$GLOBALS['link'] = connect();
	$result = array();
	for($i = 1; $i <= 5; $i++){
		$res = mysqli_query($GLOBALS['link'], "select players.id as id, amulet, firstname, lastname, teams.name as team, players.teamId as teamId, players.score as score, teams.score as teamScore, gender, `group`, nbDeaths, nbKills, nbOwnLivesTaken, nbEnemyLivesGiven, nbTimesArrested, nbCheatersCaught from players INNER JOIN teams ON players.teamId = teams.id WHERE players.teamId = '". $i . "';");
		array_push($result, fetch_result($res));
	}
    return $result;

}
function countPlayersByTeam(){
	//$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], "select teamId, count(*) as nb from players group by teamId");
    

    return fetch_result($res);
}
//returns true if edition succeeded, false otherwise
//points can be positive or negative
//another function should be called to increase/decrease counters
function editPlayerScore($playerId, $points, $cause){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `score`=`score` + '. $points .' where `id`='. $playerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
//returns true if edition succeeded, false otherwise
function setPlayerAmulet($playerId, $amulet){
    //$GLOBALS['link'] = connect();
	
    mysqli_query($GLOBALS['link'], 'update players set `amulet`="'. $amulet .'" where `id`='. $playerId.';');

    return mysqli_affected_rows($GLOBALS['link']);
}
//returns true if edition succeeded, false otherwise
//points can be positive or negative
//$cause = $causeId
function addBonusMalusToPlayer($playerId, $cause){
    //log or other action before editing player's score
	//ajouter une entrée à la table specialplayerlog
	//$GLOBALS['link'] = connect();
	
	mysqli_query($GLOBALS['link'], 'insert into specialPlayerLog(causeId, playerId, scoreImpact) VALUES ('.$cause['id'].', '.$playerId.', '.$cause['value'].');') or die(mysqli_error($GLOBALS['link']));
    return mysqli_affected_rows($GLOBALS['link']);
}

function getSpecialByPlayer($playerId){
	//$GLOBALS['link'] = connect();
	$res = mysqli_query($GLOBALS['link'], 'select SUM(scoreImpact) as total from SpecialPlayerLog where playerId='.$playerId.';');
	if($res == False){
		return array("total"=>0);
	}
	return fetch_result($res);
}
function getSpecialAllPlayers(){
	//$GLOBALS['link'] = connect();
	$res = mysqli_query($GLOBALS['link'], 'select players.id as id, SUM(scoreImpact) as total from SpecialPlayerLog RIGHT JOIN players ON SpecialPlayerLog.playerId = players.id group by players.id ;');

	
	return fetch_result($res);
}


function changePlayerTeam($loserId, $teamWinnerId){
	//$GLOBALS['link'] = connect();
	
    mysqli_query($GLOBALS['link'], 'update players set `teamId`='. $teamWinnerId .' where `id`='. $loserId.';');

    return mysqli_affected_rows($GLOBALS['link']);
	
}
/*
Compteurs:
-----------
- nbOwnLivesTaken
- nbEnemyLivesGiven
- nbKills
- nbDeaths
- nbTimesArrested
- nbCheatersCaught
- nbAmuletsTaken
- nbTimesTransformed
- nbPlayersTransformed
- nbObjectsFound
*/
function increaseNbOwnLivesTaken($playerId, $nbLives){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbOwnLivesTaken`=`nbOwnLivesTaken`+'. $nbLives .' where `id`='. $playerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbEnemyLivesGiven($playerId, $nbLives){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbEnemyLivesGiven`=`nbEnemyLivesGiven`+'. $nbLives .' where `id`='. $playerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbKills($playerId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbKills`=`nbKills`+1 where `id`='. $playerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbDeaths($playerId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbDeaths`=`nbDeaths`+1 where `id`='. $playerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbTimesArrested($loserId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbTimesArrested`=`nbTimesArrested`+1 where `id`='. $loserId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbCheatersCaught($winnerId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbCheatersCaught`=`nbCheatersCaught`+1 where `id`='. $winnerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbAmuletsTaken($playerId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbAmuletsTaken`=`nbAmuletsTaken`+1 where `id`='. $playerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbTimesTransformed($loserId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbTimesTransformed`=`nbTimesTransformed`+1 where `id`='. $loserId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbPlayersTransformed($winnerId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbPlayersTransformed`=`nbPlayersTransformed`+1 where `id`='. $winnerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}
function increaseNbObjectsFound($playerId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update players set `nbObjectsFound`=`nbObjectsFound`+1 where `id`='. $playerId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}





?>
