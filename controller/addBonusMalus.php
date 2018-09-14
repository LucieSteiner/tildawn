<?php
require("../model/players.php");
require("../model/teams.php");
require("../model/causes.php");

if(isset($_POST["causeId"]) && isset($_POST['id'])){
    $cause = getCauseById($_POST["causeId"])[0];
	if(isset($_POST["src"])){
		if($_POST['src'] == "player"){
			addBonusMalusToPlayer($_POST['id'], $cause);
			header('Location: ../pages/players.php');
		}
		else if($_POST['src'] == "team"){
		    addBonusMalusToTeam($_POST['id'], $cause);
			header('Location: ../pages/teams.php');
		}
	}
}else{
	//header('Location: ../pages/index.php');
}

?>