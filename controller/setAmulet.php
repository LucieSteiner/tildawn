<?php
require('../model/players.php');
if(isset($_POST['id']) && isset($_POST['amulet']) && isset($_POST['src'])){
	setPlayerAmulet($_POST['id'], $_POST['amulet']);
	header('Location:'.$_POST['src']);
}
else{
    header('Location: ../index.php');
}
?>