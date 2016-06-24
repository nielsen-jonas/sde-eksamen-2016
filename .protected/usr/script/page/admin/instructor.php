<?php

// Template function
require_once(USR_FUNCTION . 'template.php');

session_start();
if (isset($_POST['username']) && isset($_POST['password'])){
    require_once(USR_FUNCTION . 'database_connect.php');
    require_once(USR_FUNCTION . 'crud/verify_admin_instructor.php');
    $mysqli = database_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);
    $clean = array();
    $clean['username'] = $mysqli->real_escape_string($_POST['username']);
    $clean['password'] = $mysqli->real_escape_string($_POST['password']);
    if (verify_admin_instructor($clean, $mysqli)){
        $_SESSION['admin_instructor'] = true;
        $_SESSION['logged_in'] = true;
    }
}

isset($_SESSION['admin_instructor']) ?
template('page/admin/instructor', ['title' => 'Admin | ' . SITE_TITLE])
: template('page/login/instructor', ['title' => 'Admin | ' . SITE_TITLE]);
