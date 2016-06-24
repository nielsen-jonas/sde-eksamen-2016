<?php

// Template function
require_once(USR_FUNCTION . 'template.php');

session_start();
if (isset($_SESSION['admin_master'])){
    // Get data from uri
    $prefix = '/admin/master/instructor/';
    $str = WEBSITE_REQUEST;
    $str = preg_replace('/^' . preg_quote($prefix, '/') . '/', '', $str);
    $arr = explode('/', $str);
    $raw = array();
    $raw['id'] = $arr[0];
    require_once(USR_FUNCTION . 'database_connect.php');
    require_once(USR_FUNCTION . 'crud/read_instructor.php');
    
    $mysqli = database_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $clean['id'] = $mysqli->real_escape_string($raw['id']);
    $instructor = read_instructor($clean['id'], $mysqli);
    
    template('page/admin/master_edit_instructor', [
    'title' => 'Rediger Instruktør | ' . SITE_TITLE,
    'instructor' => $instructor
    ]);
} else {
    echo 'Unauthorized!';
}
