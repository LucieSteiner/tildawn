<?php

include_once('../model/db.php');

//returns array cause (id, name, category, value)
function getCauseById($causeId){
    /*for testing purposes only, replace with request to db
    return array("id" => 1, "name" => "causeTest", "category" => "Bonus", "value" => 200);*/

    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select `id`, `name`, `category`, `value` from causes where `id`='. $causeId .';');

    return fetch_result($res);
}

//returns array of causes (name, category, value)
function getAllCauses(){
    /*for testing purposes only, replace with request to db
    return array(
        array("id" => 1, "name" => 'Tricherie', "category" => 'Malus', "value" => -1000),
        array("id" => 2, "name" => 'Manque bénévolat', "category" =>  'Malus', "value" => -500),
        array("id" => 3, "name" => 'Sourire sympatique', "category" =>  'Bonus', "value" =>  200),
        array("id" => 4, "name" => 'Déguisement', "category" =>  'Bonus', "value" =>  500),
        array("id" => 5, "name" => 'Violence', "category" =>  'Malus', "value" =>  -1000),
        array("id" => 6, "name" => 'Fairplay', "category" =>  'Bonus', "value" =>  500)
    );*/

    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select `id`, `name`, `category`, `value` from causes;');

    return fetch_result($res);
}
function countCauses(){
	//$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select count(*) as nb from causes;');

    return fetch_result($res);
}
//returns true if edition succeeded, false otherwise
//category cannot be changed
function editCause($causeId, $newName, $newValue){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update causes set `name`="'. $newName .'", `value`='. $newValue .' where `id`='. $causeId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}

//returns true if deletion succeeded, false otherwise
function deleteCause($causeId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'delete from causes where `id`= '. $causeId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}

//returns true if creation succeeded, false otherwise
function createNewCause($causeName, $category, $value){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'insert into causes(`name`, `category`, `value`) values("'. $causeName .'", "'. $category .'", '. $value .');');

    return mysqli_affected_rows($GLOBALS['link']);
}

?>
