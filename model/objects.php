<?php

include_once(db.php);

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

    $link = connect();
    $res = mysqli_query($link, 'select `id`, `name`, `foundby`, `main` from objects;');

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

    $link = connect();
    $res = mysqli_query($link, 'select `id`, `name`, `foundby`, `main` from objects where `id`='. $objectId .';');

    return fetch_result($res);
}

//returns True if object edition succeeded, False otherwise
function editObject($objectId, $newName, $newValue, $newOwner){
    $link = connect();
    mysqli_query($link, 'update objects set `found`=1 where `id`='. $objectId .';');

    return mysqli_affected_rows($link);
}

//returns true if creation succeeded, false otherwise
function createNewObject($name, $value, $foundby, $main){
    $link = connect();
    mysqli_query($link, 'insert into object(`name`, `value`, `foundby`, `main`) values("'. $name .'", '. $value .', '. $foundby .', '. $main .');');

    return mysqli_affected_rows($link);
}

?>
