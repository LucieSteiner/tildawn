<?php

if(isset[$_POST['action'] && isset($_POST['src'])){
    if($_POST['action'] == 'create'){
	    if($_POST['src'] == 'message'){
		    createNewMessage($_POST['title'], $_POST['text']);
		}
		else if($_POST['src'] == 'alert'){
		    createNewAlert($_POST['title'], $_POST['text']);
		}
	}
	else if($_POST['action'] == 'delete' && isset($_POST['id'])){
	    if($_POST['src'] == 'message'){
		    deleteMessage($_POST['id']);
		}
		else if($_POST['src'] == 'alert'){
		    deleteAlert($_POST['id']);
		}
	}
	else if($_POST['action'] == 'toggle' && isset($_POST['id'])){
	    if($_POST['src'] == 'message'){
		    toggleMessageStatus($_POST['id']);
		}
		else if($_POST['src'] == 'alert'){
		    toggleAlertStatus($_POST['id']);
		}
	}
}

if($_POST['src'] == 'message'){
    header('Location: ../pages/messages.php');
}
else if($_POST['src'] == 'alert'){
    header('Location: ../pages/alerts.php');
}


?>