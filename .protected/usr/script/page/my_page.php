<?php

// Template function
require_once(USR_FUNCTION . 'template.php');

template('page/my_page', [
'title' => 'Min Side | ' . SITE_TITLE,
'styles' => ['my-page']
]);