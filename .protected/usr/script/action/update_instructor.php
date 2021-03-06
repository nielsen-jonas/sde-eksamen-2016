<?php

session_start();
if (isset($_SESSION['admin_master'])) {
    require_once(DIR_FUNCTION . 'database_connect.php');
    require_once(DIR_FUNCTION . 'crud/update_instructor.php');
    $mysqli = database_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $clean['id'] = $mysqli->real_escape_string($_REQUEST['id']);
    $clean['name'] = $mysqli->real_escape_string($_POST['name']);
    $clean['email'] = $mysqli->real_escape_string($_POST['email']);
    $clean['phone'] = $mysqli->real_escape_string($_POST['phone']);
    $clean['username'] = $mysqli->real_escape_string($_POST['username']);
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $clean['password'] = $mysqli->real_escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]));
    }
    
    if (update_instructor($clean, $mysqli)) {
        require_once(DIR_FUNCTION . 'template.php');
        header('Location: ' . url('page/admin/master'));
    } else {
        echo 'Failed to update instructor';
    }
} else {
    echo 'Unauthorized!';
}
