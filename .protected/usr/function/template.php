<?php

/**
 *
 * Call a template
 *
 * @param string $template The template to call
 * @param array $temp_data Data passed to template
 *
 */
function template($template, $temp_data = array())
{
    extract($temp_data);
    require_once(USR_TEMPLATE . $template . '.temp.php');
}