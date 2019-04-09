<?php

include_once('../model/db.php');

/* Messages (information) */

//return all messages (information, not alerts) as an array of messages (id, title, text, status)
//status is "Active" or "Inactive"
function getAllMessages(){
    /*for testing purposes only, replace with request to db
    return array(
        array('messageId' => 1, 'title' => 'Indice', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Active'),
        array('messageId' => 2, 'title' => 'Annonce', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' =>'Inactive'),
        array('id' => 3, 'title' => 'Météo', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' =>'Active'),
        array('id' => 4, 'title' => 'Nouvel indice', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' =>'Active'),
        array('id' => 5, 'title' => 'Fin du jeu', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' =>'Inactive')
    );*/
    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select `id`, `title`, `text`, `status` from messages;');

    return fetch_result($res);
}

function countActiveMessages(){
	//$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select count(*) as nb from messages where `status`= 1;');

    return fetch_result($res);
}
function getAllActiveMessages(){
	//$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select * from messages where `status`= 1;');

    return fetch_result($res);
}
//change status form active to inactive or from inactive to active
//returns true if change succeeded, false otherwise
function toggleMessageStatus($messageId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update messages set `status`=NOT(`status`) where `id`='. $messageId .';') or die(mysqli_error($GLOBALS['link']));

    return mysqli_affected_rows($GLOBALS['link']);
}

//returns True if deletion succeeded, False otherwise
function deleteMessage($messageId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'delete from messages where `id`='. $messageId .';')or die(mysqli_error($GLOBALS['link']));

    return mysqli_affected_rows($GLOBALS['link']);
}

//returns True if creation succeeded, False otherwise
//message status is always inactive at creation
function createNewMessage($title, $text){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'insert into messages(`title`, `text`, `status`) values("'. $title .'", "'. $text .'", 0);') or die(mysqli_error($GLOBALS['link']));

    return mysqli_affected_rows($GLOBALS['link']);
}

/* Alerts */
//returns all alerts as an array of alerts (id, title, text, status)
//status is "Active" or "Inactive"
function getAllAlerts(){
    /*for testing purposes only, replace with request to db
    return array(
        array('id' => 1,'title' => 'Attaque extraterrestres', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Active'),
        array('id' => 2,'title' => 'Fin du monde', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Inactive'),
        array('id' => 3,'title' => 'Vaches dans le Bureau', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Inactive'),
        array('id' => 4,'title' => 'Paysan pas content', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'status' => 'Active')
    );*/
    //$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select `id`, `title`, `text`, `status` from alerts;');

    return fetch_result($res);
}
function countActiveAlerts(){
	//$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select count(*) as nb from alerts where `status`= 1;');

    return fetch_result($res);
}
function getAllActiveAlerts(){
	//$GLOBALS['link'] = connect();
    $res = mysqli_query($GLOBALS['link'], 'select * from alerts where `status`= 1;');

    return fetch_result($res);
}
//change status form active to inactive or from inactive to active
//returns true if change succeeded, false otherwise
function toggleAlertStatus($alertId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'update alerts set `status`=NOT(`status`) where id ='. $alertId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}

//returns True if deletion succeeded, False otherwise
function deleteAlert($alertId){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'delete from alerts where `id`='. $alertId .';');

    return mysqli_affected_rows($GLOBALS['link']);
}

//returns True if creation succeeded, False otherwise
//alert status is always inactive at creation
function createNewAlert($title, $text){
    //$GLOBALS['link'] = connect();
    mysqli_query($GLOBALS['link'], 'insert into alerts(`title`, `text`) values("'. $title .'", "'. $text.'");');

    return mysqli_affected_rows($GLOBALS['link']);
}

?>
