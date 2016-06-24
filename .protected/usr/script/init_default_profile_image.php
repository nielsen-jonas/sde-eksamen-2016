<?php

require_once(USR_FUNCTION . 'database_connect.php');
require_once(USR_FUNCTION . 'crud/init_default_profile_image.php');
$clean = [
    'name' => 'default.jpg',
    'type' => 'user'];
$mysqli = database_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$insert_id = init_default_profile_image($clean, $mysqli);
echo $insert_id ? 'Default profile image created successfully!<br>Insert ID: ' . $insert_id : 'Failed to create default profile image!';
