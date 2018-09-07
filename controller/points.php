<?php
require('../controller/bureau.php');
if(isset($_POST['src'])){
	if($_POST['src'] == 'buy-lives'&& isset($_POST['id']) && isset($_POST['nbLives'])){
		$playerId = $_POST['id'];
		$nbLives = $_POST['nbLives'];
	    buyLives($playerId, $nbLives);
		header('Location: ../pages/infoPlayer.php?id='.$playerId);
	}
	else if($_POST['src'] == 'get-arrested' && isset($_POST['id']) && isset($_POST['id2'])){
		$loserId = $_POST['id'];
		$winnerId = $_POST['id2'];
	    getArrested($loserId, $winnerId);
	}
	else if($_POST['src'] == 'get-amulet' && isset($_POST['id']) ){
		$playerId = $_POST['id'];
	    getAmuletBack($playerId);
	}
	else if($_POST['src'] == 'change-team' && isset($_POST['id']) && isset($_POST['id2'])){
		$loserId = $_POST['id'];
		$winnerId = $_POST['id2'];
	    changeTeam($loserId, $winnerId);
	}
	else if($_POST['src'] == 'bring-lives' && isset($_POST['id']) && isset($_POST['nbLives'])){
		$playerId = $_POST['id'];
		$nbLives = $_POST['nbLives'];
	    bringLives($playerId, $nbLives);
	}
	else if($_POST['src'] == 'bring-amulet' && isset($_POST['id']) && isset($_POST['amulet'])){
		$playerId = $_POST['id'];
		$amulet = $_POST['amulet'];
		bringAmulet($playerId, $amulet);
	}
	else if($_POST['src'] == 'bring-object' && isset($_POST['id']) && isset($_POST['objectId'])){
		
		$playersId = array($_POST['id']);
		if(isset($_POST['id2'])){
			array_push($playerId, $_POST['id2']);
		}
		if(isset($_POST['id3'])){
			array_push($playerId, $_POST['id3']);
		}
		$objectId = $_POST['objectId'];
		bringObject($playersId, $objectId);
	}
}





?>