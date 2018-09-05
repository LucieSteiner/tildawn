<?php
require("../model/objects.php");

function getBestTeamScore(){
	$result = 6000;
	//appel à une fonction de la db, mettre le résultat dans result
	return $result;
}

function getBestPlayerScore(){
	$result = 12000;
	//appel à une fonction de la db, mettre le résultat dans result
	return $result;
}

function getNbActiveAlerts(){
	$result = 2;
	//appel à une fonction de la db, mettre le résultat dans result
	
	return $result;
	
}

function getNbActiveMessages(){
	$result = 3;
	//appel à une fonction de la db, mettre le résultat dans result
	
	return $result;
}

function getNbFoundObjects(){
	$counter = 0;
	$objects = getAllObjects();
	foreach ($objects as $object){
		if ($object["foundby"] != "-"){
			$counter += 1;
		}
	}
	return $counter;
	
}

function getNbCauses(){
	$result = 5;
	//appel à une fonction de la db, mettre le résultat dans result
	
	return $result;
}

function getNbPlayersByTeam(){
	$result = array(100, 20, 200, 25, 50);
	return $result;
}

function getPlayers(){
	
	$players = array (
    array('ABCDE', 'John', 'Doe', 'Usine', 141),
	array('JD38R', 'Harry', 'Potter', 'Asile', 567),
	array('DH38J', 'Megan', 'Fox', 'Asile', 23456789),
	array('NJ3H7', 'Nicolas', 'Rey', 'Abattoirs', 0),
	array('APOE8', 'Dark', 'Vador', 'Caserne', 2000),
	array('NCE92', 'René', 'Rentsch', 'Zombie', 100),
	array('BD378', 'Donald', 'Trump', 'Asile', 3004),
	array('DN388', 'Baden', 'Powell', 'Zombie', 42),
	array('3DJ31', 'John', 'Smith', 'Caserne', 788),
	array('QWERT', 'Prince', 'Charmant', 'Abattoirs', 1000),
	array('ND3U0', 'Johnny', 'Depp', 'Usine', 5000),
	array('CNA92', 'Fée', 'Clochette', 'Asile', 18219),
	array('DFGHJ', 'Peter', 'Pan', 'Zombie', 1212),
	array('TZUET', 'Capitaine', 'Crochet', ' Caserne', 10293),
	array('GED73', 'Schtroumpf', 'Costaud', 'Abattoirs', 10),
	array('2EJ23', 'Castor', 'Baraqué', 'Usine', 1029),
	array('EO231', 'Ta', 'Mère', 'Zombie', 20000),
	array('XNEU1', 'Kylo', 'Ren', 'Caserne', 2049),
	array('R3U9F', 'Frodon', 'Sacquet', 'Asile', 5000),
	array('POS12', 'Darlene', 'Alderson', 'Zombie', 100000),
	array('E3Z71', 'Bobby', 'Bobby', 'Abattoirs', 1927),
	array('JE319', 'Père', 'Noël', 'Usine', 100),
	array('DH382', 'Napoléon', 'Bonaparte', 'Zombie', 600),
	array('2WD32', 'Mère', 'Grand', 'Caserne', 700),
	array('DJ310', 'Mister', 'Darcy', 'Abattoirs', 2500),
	array('DHA23', 'Elisabeth', 'Bennett', 'Usine', 6000),
	array('00000', 'Alice', 'Alice', 'Zombie', 1500),
	array('11111', 'Bob', 'Bob', 'Asile', 200)
); 

return $players;
}

function addBonusToPlayer(){}
function addMalusToPlayer(){}
function addBonusToTeam(){}
function addMalusToTeam(){}

function getCauses($category){
	$result = array();
	$causes = array(
			array("name" => 'Tricherie', "category" => 'Malus', "value" => 1000),
			array("name" => 'Manque bénévolat', "category" =>  'Malus', "value" => 500),
			array("name" => 'Sourire sympatique', "category" =>  'Bonus', "value" =>  200),
			array("name" => 'Déguisement', "category" =>  'Bonus', "value" =>  500),
			array("name" => 'Violence', "category" =>  'Malus', "value" =>  1000),
			array("name" => 'Fairplay', "category" =>  'Bonus', "value" =>  500)
		);
	if($category == null){
		$result = $causes;
	}
	
	if($category == "Bonus"){
		foreach($causes as $cause){
			if($cause["category"] == "Bonus"){
				array_push($result, $cause);
			}
		}
	}
	else if($category == "Malus"){
		foreach($causes as $cause){
			if($cause["category"] == "Malus"){
				array_push($result, $cause);
			}
		}
	}
	return $result;
	
}


?>