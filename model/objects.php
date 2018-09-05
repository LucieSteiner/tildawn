<?php

//returns an array of arrays containing objects properties (name, value, foundby)
//if an object has not been found yet, the value for the foundby field must be "-"
function getAllObjects(){
	
	//for testing purposes only, must be replaced by db request
	$objects = array(
    array("name" => "Table", "value" => 200, "foundby" => "Usine"),
	array("name" => "Pantoufle","value" => 450,"foundby" => "-"),
	array("name" => "Licorne","value" => 10000, "foundby" => "Asile"),
	array("name" => "Drogue","value" => 10, "foundby" => "Caserne"),
	array("name" => "Amour","value" => 500, "foundby" => "Abattoirs"),
	array("name" => "Vocation","value" => 2000, "foundby" => "Usine"),
	array("name" => "Amis","value" => 150, "foundby" => "-"),
	array("name" => "Lampadaire","value" => 250, "foundby" => "-"),
	array("name" => "Mort","value" => 0, "foundby" => "Zombie"),
	array("name" => "Poussette","value" => 471, "foundby" => "Asile"),
	array("name" => "Fleurs","value" => 200, "foundby" => "Caserne"),
	array("name" => "Piège à loup","value" => 1000, "foundby" => "-")

    );
	
	return $objects;
	
}

//returns an array containing the object's properties (name, value, foundby)
function getObjectByName($name){}

//returns True if object creation succeeded, False otherwise
function createNewObject($name, $value){}

//returns True if object edition succeeded, False otherwise
function editObject($name, $newName, $newValue, $newOwner){}

//returns True if object deletion succeeded, False otherwise
function deleteObject($name){}



?>