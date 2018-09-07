<?php

/* Messages (information) */

//return all messages (information, not alerts) as an array of messages (id, title, text, status)
//status is "Active" or "Inactive"
function getAllMessages(){
	//for testing purposes only, replace with request to db
	return array(
		array('id' => 1, 'title' => 'Indice', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Active'),
		array('id' => 2, 'title' => 'Annonce', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' =>'Inactive'),
		array('id' => 3, 'title' => 'Météo', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' =>'Active'),
		array('id' => 4, 'title' => 'Nouvel indice', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' =>'Active'),
		array('id' => 5, 'title' => 'Fin du jeu', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' =>'Inactive')

	);
}


//change status form active to inactive or from inactive to active
//returns true if change succeeded, false otherwise
function toggleMessageStatus($messageId){
	
}

//returns True if deletion succeeded, False otherwise
function deleteMessage($messageId){
	
}

//returns True if creation succeeded, False otherwise
//message status is always inactive at creation
function createNewMessage($title, $text){
	
}


/* Alerts */
//returns all alerts as an array of alerts (id, title, text, status)
//status is "Active" or "Inactive"
function getAllAlerts(){
	//for testing purposes only, replace with request to db
	return array(
		array('id' => 1,'title' => 'Attaque extraterrestres', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Active'),
		array('id' => 2,'title' => 'Fin du monde', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Inactive'),
		array('id' => 3,'title' => 'Vaches dans le Bureau', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Inactive'),
		array('id' => 4,'title' => 'Paysan pas content', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Active')
	);


	
}

//change status form active to inactive or from inactive to active
//returns true if change succeeded, false otherwise
function toggleAlertStatus($alertId){
}

//returns True if deletion succeeded, False otherwise
function deleteAlert($alertId){
	
}

//returns True if creation succeeded, False otherwise
//alert status is always inactive at creation
function createNewAlert($title, $text){
}

?>