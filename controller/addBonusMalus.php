<?php
require("../model/players.php");
require("../model/teams.php");
require("../model/causes.php");

if(isset($_POST["name"]) && isset($_POST['id'])){
    $cause = getCauseByName($_POST["name"]);
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
	header('Location: ../pages/index.php');
}

?>