<?php
require("../model/players.php");
if(isset($_POST['amulet']) && isset($_POST['src'])){
	$playerId = getPlayerIdByAmulet($_POST['amulet']);

    if($playerId == null){
		//header('Location: ../pages/indexBureau.php');
	}
	else{
		header('Location: ../pages/infoPlayer.php?id='.$playerId[0]['id'].'&src='.$_POST['src']);
	}
}

?>