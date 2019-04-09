<?php
/**
 * User: Kerroïn
 * Date: 04.09.2018
 * Time: 20:02
 *
 * Set de fonctions de base pour interragir avec la bse de donnée.
 * La base de donnée ne doit pas être accédée autrmeent que par les fonctions ci-dessous!
 */


/* Constants */
define("HOST", 'localhost');
define("USER", 'tildawn-mysql');
define("PWD", 'uum7xeeR');
define("DB", 'tildawn');


/* Mysql related functions */
function connect() {
	$link = mysqli_connect(HOST, USER, PWD, DB);
	mysqli_set_charset($link, "utf8");
    return $link;
}
$link = connect();
function fetch_result($res) {
	$result = array();
	if($res != False){
	    while($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
	}else{
		//echo "No result";
	}
    return $result;
}

?>
