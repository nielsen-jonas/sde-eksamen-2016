<?php
function read_instructor($id, $mysqli)
{
    // Get instructor data
    $sql = 'SELECT id, name, email, phone, username ';
    $sql .= 'FROM User ';
    $sql .= "WHERE type = 'instructor' AND id = '" . $id . "' LIMIT 1;";
    $result = $mysqli->query($sql);
    
    $instructor = $result->fetch_assoc();

    return $instructor;
}
