<?php

// Template function
require_once(USR_FUNCTION . 'template.php');

template('page/gallery', [
'title' => 'Galleri | ' . SITE_TITLE,
'styles' => ['gallery']
]);