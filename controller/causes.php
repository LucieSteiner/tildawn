<?php
require("../model/causes.php");
if(isset($_POST['action'])){
    if($_POST['action'] == 'create'){
		if(isset($_POST['name']) && isset($_POST['category']) && isset($_POST['value'])){
		    createNewCause($_POST['name'], $_POST['category'], $_POST['value']);
		}
	}
	else if($_POST['action'] == 'edit'){
		if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['category']) && isset($_POST['value'])){
			editCause($_POST['id'], $_POST['name'], $_POST['value']);
		}
	}
	else if($_POST['action'] == 'delete'){
		if (isset($_POST['id'])){
			deleteCause($_POST['id']);
		}
	}
}
header('Location: ../pages/causes.php');

?>