<?php

// Template function
require_once(USR_FUNCTION . 'template.php');

session_start();
if (isset($_POST['username']) && isset($_POST['password'])){
    require_once(USR_FUNCTION . 'database_connect.php');
    require_once(USR_FUNCTION . 'crud/verify_admin_master.php');
    $mysqli = database_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);
    $clean = array();
    $clean['username'] = $mysqli->real_escape_string($_POST['username']);
    $clean['password'] = $mysqli->real_escape_string($_POST['password']);
    if (verify_admin_master($clean, $mysqli)){
        $_SESSION['admin_master'] = true;
        $_SESSION['logged_in'] = true;
    }
}

if (isset($_SESSION['admin_master'])) {
    require_once(USR_FUNCTION . 'database_connect.php');
    require_once(USR_FUNCTION . 'crud/read_all_instructors.php');
    $mysqli = database_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);
    $instructors = read_all_instructors($mysqli);
    
    template('page/admin/master', [
    'title' => 'Admin | ' . SITE_TITLE,
    'instructor' => $instructors 
    ]);
} else {
    template('page/login/master', ['title' => 'Admin | ' . SITE_TITLE]);
}