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
define("HOST", "localhost");
define("USER", "");
define("PWD", "");
define("DB", "tildawn");

/* Mysql related functions */
function connect() {
    return mysqli_connect(HOST, USER, PWD, DB);
}

function fetch_result($res) {
    while($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

?>