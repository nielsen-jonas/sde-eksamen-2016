<?php
function init_master_admin($clean, $mysqli)
{
    extract($clean);
    $sql = 'INSERT INTO ';
    $sql .= 'User ';
    $sql .= '(name, email, phone, date_registration, username, password, type, fk_image) ';
    $sql .= 'VALUES ';
    $sql .= "('$name', '$email', '$phone', '$date_registration', '$username', '$password', '$type', '$fk_image')";
    $mysqli->begin_transaction();
    $mysqli->query($sql);
    //echo $mysqli->error;
    $insert_id = $mysqli->insert_id;
    if ($insert_id) {
        $mysqli->commit();
        return $insert_id;
    }
    $mysqli->rollback();
    return false;
}
