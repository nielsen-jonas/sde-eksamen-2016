<?php

/**
 *
 * Get the url mapped to a script
 *
 * @param string $script The script of which a url is mapped
 * @return string
 *
 */
function scr_url($script)
{
    static $script_route = null;
    if ($script_route == null) {
        $script_route = [];
        foreach (ROUTE as $route => $script) {
            if (is_array($script)) {
                $script = $script[0];
            }
            $script_route[$script] = $route;
        }
    }
    $route = $script_route[$script];
    return WEBSITE_URL . $route;
}