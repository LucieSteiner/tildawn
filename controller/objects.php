
<?php
//TODO: Quick fix to remove on line 8
require('../model/objects.php');
require('../model/teams.php');
if(isset($_POST['id']) && isset($_POST['value'])){
	if(isset($_POST['foundby'])){
		
		$team = getTeamIdByName($_POST['foundby']);
		$teamId = $team[0]['id'];
	}
	else{
		$teamId = NULL;
	}
    echo editObject($_POST['id'], $_POST['name'], $_POST['value'], $teamId);
}
header('Location: ../pages/objects.php');

?>