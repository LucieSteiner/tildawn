<?php

if(isset($_POST['id']) && isset($_POST['value']) && isset ($_POST['foundby'])){
    editObject($_POST['id'], $_POST['name'], $_POST['value'], $_POST['foundby']);
}
header('Location: ../pages/objects.php');

?>