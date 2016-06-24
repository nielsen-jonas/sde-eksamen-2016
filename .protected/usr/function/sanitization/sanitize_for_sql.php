<?php
function sanitize_for_sql(array $raw, $db_host, $db_user, $db_pass, $db_name)
{
    $sanitizer = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($sanitizer->connect_error) {
        return null;
    }
    $clean = array();
    foreach ($raw as $key => $value) {
        $clean[$key] = $sanitizer->real_escape_string(trim($value));
    }
    return $clean;
}
