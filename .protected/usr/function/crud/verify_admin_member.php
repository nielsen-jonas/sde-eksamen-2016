<?php
function verify_admin_member($clean, $mysqli)
{
    //Get hashed password for user
    $sql = "SELECT password FROM User WHERE type = 'member' AND username = '" . $clean['username'] . "' LIMIT 1;";
    $result = $mysqli->query($sql);
    $hash = $result->fetch_row()[0];
    if (password_verify($clean['password'], $hash)) {
        return true;
    }
    return false;
}
