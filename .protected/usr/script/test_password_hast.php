<?php

puke('Test password hash');
$password = 'secret';
$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
puke('password: ' . $password);
puke('hash: ' . $hash);
puke('password verify ' . $password . ': ' . password_verify($password, $hash));
$false = 'test-hest';
puke('password verify ' . $false . ': ' . password_verify($false, $hash));
