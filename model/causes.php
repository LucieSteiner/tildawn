<?php

//returns array cause (name, category, value)
function getCauseByName($causeName){
	//for testing purposes only, replace with request to db
    return array("name" => "causeTest", "category" => "Bonus", "value" => 200);
}

//returns array of causes (name, category, value)
function getAllCauses(){

}

//returns true if edition succeeded, false otherwise
function editCause($causeName, $newName, $newValue){

}

//returns true if deletion succeeded, false otherwise
function deleteCause($causeName){

}

//returns true if creation succeeded, false otherwise
function createNewCause($causeName, $category, $value){

}
?>