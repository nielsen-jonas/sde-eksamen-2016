<?php
function database_connect($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null)
{
    // Open a new connection to the MySQL server
    $mysqli = new mysqli($host, $user, $password, $database, $port, $socket);
    
    // Die on failure
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    
    // Return
    return $mysqli;
}
