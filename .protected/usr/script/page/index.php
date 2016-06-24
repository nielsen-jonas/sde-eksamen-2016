<?php

// Template function
require_once(USR_FUNCTION . 'template.php');

template('page/index', [
'title' => SITE_TITLE,
'styles' => ['index']
]);