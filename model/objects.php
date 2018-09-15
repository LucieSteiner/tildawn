<?php

include_once('../model/db.php');

//returns an array of arrays containing objects properties (name, value, foundby, main)
//if an object has not been found yet, the value for the foundby field must be "-"
// main = 1 if it is one of the main objects, 0 otherwise
function getAllObjects(){

    /*for testing purposes only, must be replaced by db request
    $objects = array(
        array("id" => 1, "name" => "Table", "value" => 210, "foundby" => "Usine", "main" => 1),
        array("id" => 2, "name" => "Pantoufle","value" => 90,"foundby" => "-", "main" => 0),
        array("id" => 3, "name" => "Licorne","value" => 210, "foundby" => "Asile", "main" => 1),
        array("id" => 4, "name" => "Drogue","value" => 90, "foundby" => "Caserne", "main" => 0),
        array("id" => 5, "name" => "Amour","value" => 210, "foundby" => "Abattoirs", "main" => 1),
        array("id" => 6, "name" => "Vocation","value" => 210, "foundby" => "Usine", "main" => 1),
        array("id" => 7, "name" => "Amis","value" => 90, "foundby" => "-", "main" => 0),
        array("id" => 8, "name" => "Lampadaire","value" => 90, "foundby" => "-", "main" => 0),
        array("id" => 9, "name" => "Mort","value" => 90, "foundby" => "Zombie", "main" => 0),
        array("id" => 10, "name" => "Poussette","value" => 210, "foundby" => "Asile", "main" => 1),
        array("id" => 11, "name" => "Fleurs","value" => 90, "foundby" => "Caserne", "main" => 0),
        array("id" => 12, "name" => "Piège à loup","value" => 90, "foundby" => "-", "main" => 0)
    );*/

    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select objects.id as id, objects.name as name, value, teams.name as foundby, `main` from objects left join teams on objects.teamId = teams.id;');

    return fetch_result($res);

}


//returns an array containing the object's properties (id, name, value, foundby)
function getObjectById($objectId){
    /*for testing purposes only, must be replaced by db request
    $objects = getAllObjects();
    foreach($objects as $object){
        if($object['id'] == $objectId){
            return $object;
        }
    }
    return null;*/

    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select objects.id as id, objects.name as name, value, teams.name as foundby, `main` from objects left join teams on objects.teamId = teams.id where objects.id ='. $objectId .';');

    return fetch_result($res);
}

function countFoundObjects(){
	//$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select count(*) as nb from objects where found=1;');

    return fetch_result($res);
}
//returns True if object edition succeeded, False otherwise
//$newOwner must be teamId
function editObject($objectId, $newName, $newValue, $newOwner){
    //$GLOBALS['link'] = connect();
	$found = 0;
	if($newOwner != NULL){
		$found = 1;
		mysqli_query($GLOBALS['link'], 'update objects set `name`="'. $newName .'", `value`='. $newValue .', `found`='. $found .', `teamId`='.$newOwner.' where `id`='. $objectId .';') or die(mysqli_error($GLOBALS['link']));
	}
    else{
		mysqli_query($GLOBALS['link'], 'update objects set `name`="'. $newName .'", `value`='. $newValue .', `found`='. $found .', `teamId`=NULL where `id`='. $objectId .';') or die(mysqli_error($GLOBALS['link']));
	}
    

    return mysqli_affected_rows($GLOBALS['link']);
}

//returns true if creation succeeded, false otherwise
function createNewObject($name, $value, $foundby, $main){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'insert into object(`name`, `value`, `foundby`, `main`) values("'. $name .'", '. $value .', '. $foundby .', '. $main .');');

    return mysqli_affected_rows($GLOBALS['link']);
}

?>
