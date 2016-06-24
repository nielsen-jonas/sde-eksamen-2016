<?php

require_once(USR_FUNCTION . 'database_connect.php');
require_once(USR_FUNCTION . 'crud/init_master_admin.php');
$hash = password_hash('admin', PASSWORD_BCRYPT, ['cost' => 12]);
$clean = [
    'name'              => 'Jonas',
    'email'             => 'abc@def.ghi',
    'phone'             => '12345678',
    'date_registration' => '1016-04-04 09:09:09',
    'username'          => 'admin',
    'password'          => $hash,
    'type'              => 'admin',
    'fk_image'          => '1'];
$mysqli = database_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$insert_id = init_master_admin($clean, $mysqli);
echo $insert_id ? 'Admin created successfully!<br>Insert ID: ' . $insert_id : 'Failed to create admin!';
