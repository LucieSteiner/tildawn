<?php



session_start();

if(isset($_GET['role'])){
	$_SESSION['role'] = $_GET['role'];
}else{
	if(!isset($_SESSION['role'])){
		$_SESSION['role'] = "grotte";
	}
}
if($_SESSION['role'] == "azure"){ 
	require("indexAzure.php");
}
else if($_SESSION['role'] == "grotte"){
	require("indexGrotte.php");	
}	
else if($_SESSION['role'] == "bureau"){
	require("indexBureau.php");
}		
?>
    