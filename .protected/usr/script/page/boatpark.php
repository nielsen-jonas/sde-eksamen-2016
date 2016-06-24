<?php

// Template function
require_once(USR_FUNCTION . 'template.php');

template('page/boatpark', [
'title' => 'Bådpark | ' . SITE_TITLE,
'styles' => ['boatpark']
]);