<?php
function delete_instructor($id, $mysqli)
{
    $sql = 'DELETE FROM User ';
    $sql .= 'WHERE id = ' . $id;
    
    $mysqli->begin_transaction();
    $mysqli->query($sql);
    if ($mysqli->affected_rows == 1) {
        $mysqli->commit();
        return true;
    }
    $mysqli->rollback();
    return false;
}
