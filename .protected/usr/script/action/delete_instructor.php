<?php

session_start();
if (isset($_SESSION['admin_master'])) {
    require_once(DIR_FUNCTION . 'database_connect.php');
    require_once(DIR_FUNCTION . 'crud/delete_instructor.php');
    $mysqli = database_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $clean['id'] = $mysqli->real_escape_string($_REQUEST['id']);
    if (delete_instructor($clean['id'], $mysqli)) {
        require_once(DIR_FUNCTION . 'template.php');
        header('Location: ' . url('page/admin/master'));
    } else {
        echo 'Failed to delete instructor';
    }
} else {
    echo 'Unauthorized!';
}
