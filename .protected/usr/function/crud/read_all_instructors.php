<?php
function read_all_instructors($mysqli)
{
    // Get instructor data
    $sql = 'SELECT id, name, email, phone, date_registration, username ';
    $sql .= 'FROM User ';
    $sql .= "WHERE type = 'instructor'";
    
    $result = $mysqli->query($sql);
    
    $instructors = array();
    while ($row = $result->fetch_assoc()) {
        $instructors[] = $row;
    }

    if (empty($instructors)) {
        return null;
    }

    return $instructors;
}
