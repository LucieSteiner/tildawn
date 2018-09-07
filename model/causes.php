<?php

//returns array cause (id, name, category, value)
function getCauseById($causeId){
	//for testing purposes only, replace with request to db
    return array("id" => 1, "name" => "causeTest", "category" => "Bonus", "value" => 200);
}

//returns array of causes (name, category, value)
function getAllCauses(){
    //for testing purposes only, replace with request to db
    return array(
			array("id" => 1, "name" => 'Tricherie', "category" => 'Malus', "value" => -1000),
			array("id" => 2, "name" => 'Manque bénévolat', "category" =>  'Malus', "value" => -500),
			array("id" => 3, "name" => 'Sourire sympatique', "category" =>  'Bonus', "value" =>  200),
			array("id" => 4, "name" => 'Déguisement', "category" =>  'Bonus', "value" =>  500),
			array("id" => 5, "name" => 'Violence', "category" =>  'Malus', "value" =>  -1000),
			array("id" => 6, "name" => 'Fairplay', "category" =>  'Bonus', "value" =>  500)
		);
}

//returns true if edition succeeded, false otherwise
//category cannot be changed
function editCause($causeId, $newName, $newValue){
	return True;
}

//returns true if deletion succeeded, false otherwise
function deleteCause($causeId){
	return True;
}

//returns true if creation succeeded, false otherwise
function createNewCause($causeName, $category, $value){
	return True;
}
?>