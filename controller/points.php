<?php
require('../controller/bureau.php');
if(isset($_POST['src'])){
	//fonctionne
	if($_POST['src'] == 'buy-lives'&& isset($_POST['id']) && isset($_POST['nbLives'])){
		$playerId = $_POST['id'];
		$nbLives = $_POST['nbLives'];
	    buyLives($playerId, $nbLives);
		header('Location: ../pages/infoPlayer.php?id='.$playerId);
	}
	//fonctionne
	else if($_POST['src'] == 'get-arrested' && isset($_POST['id']) && isset($_POST['id2'])){
		$loserId = $_POST['id'];
		$winnerId = getPlayerIdByAmulet($_POST['id2'])[0]['id'];
	    getArrested($loserId, $winnerId);
		header('Location: ../pages/infoPlayer.php?id='.$loserId);
	}
	//fonctionne
	else if($_POST['src'] == 'get-amulet' && isset($_POST['id']) ){
		$playerId = $_POST['id'];
	    getAmuletBack($playerId);
		header('Location: ../pages/infoPlayer.php?id='.$playerId);
	}
	//fonctionne
	else if($_POST['src'] == 'change-team' && isset($_POST['id']) && isset($_POST['id2'])){
		$loserId = $_POST['id'];
		$winnerId = getPlayerIdByAmulet($_POST['id2'])[0]['id'];
	    changeTeam($loserId, $winnerId);
		header('Location: ../pages/infoPlayer.php?id='.$loserId);
	}
	else if($_POST['src'] == 'bring-lives' && isset($_POST['id']) && isset($_POST['nbLives'])){
		$playerId =  getPlayerIdByAmulet($_POST['id'])[0]['id'];
		$nbLives = $_POST['nbLives'];
	    bringLives($playerId, $nbLives);
		header('Location: ../pages/indexBureau.php');
	}
	//fonctionne
	else if($_POST['src'] == 'bring-amulet' && isset($_POST['id']) && isset($_POST['amulet'])){
		$playerId = getPlayerIdByAmulet($_POST['id'])[0]['id'];
		$amulet = $_POST['amulet'];
		bringAmulet($playerId, $amulet);
		header('Location: ../pages/indexBureau.php');
	}
	//fonctionne
	else if($_POST['src'] == 'bring-object' && isset($_POST['id']) && isset($_POST['objectId'])){
		$id = getPlayerIdByAmulet($_POST['id'])[0]['id'];
		$playersId = array($id);
		if(!empty($_POST['id2'])){
			$id2 =  getPlayerIdByAmulet($_POST['id2'])[0]['id'];
			array_push($playersId, $id2);
		}
		if(!empty($_POST['id3'])){
			$id3 =  getPlayerIdByAmulet($_POST['id3'])[0]['id'];
			array_push($playersId, $id3);
		}
		$objectId = $_POST['objectId'];
		bringObject($playersId, $objectId);
		header('Location: ../pages/objectsBureau.php');
	}
}





?>