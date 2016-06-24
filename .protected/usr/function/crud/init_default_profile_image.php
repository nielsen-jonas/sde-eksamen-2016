<?php
function init_default_profile_image($clean, $mysqli)
{
    extract($clean);
    $sql = 'INSERT INTO ';
    $sql .= 'ImageRegistry ';
    $sql .= '(name, type) ';
    $sql .= 'VALUES ';
    $sql .= "('$name', '$type')";
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
