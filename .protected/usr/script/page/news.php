<?php

// Template function
require_once(USR_FUNCTION . 'template.php');

template('page/news', [
'title' => 'Nyheder | ' . SITE_TITLE,
'styles' => ['news']
]);