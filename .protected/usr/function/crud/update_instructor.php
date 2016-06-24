<?php
function update_instructor($clean, $mysqli)
{
    $mysqli->begin_transaction();
    
    // Update data
    $sql = 'UPDATE User ';
    $sql .= 'SET ';
    $sql .= "name='" . $clean['name'] . "', email='" . $clean['email'] . "', phone='" . $clean['phone'] . "', username='" . $clean['username'] . "' ";
    if (isset($clean['password'])) {
        $sql .= ", password= '" . $clean['password'] . "' ";
    }
    $sql .= 'WHERE ';
    $sql .= 'id = ' . $clean['id'];
    $mysqli->query($sql);
    $affected_rows = $mysqli->affected_rows;
    if ($affected_rows == 0 || $affected_rows == 1) {
        $mysqli->commit();
        return true;
    }

    $mysqli->rollback();
    return false;
}
