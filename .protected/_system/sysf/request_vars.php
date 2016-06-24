<?php

function request_vars()
{
    $req = explode('/', WEBSITE_REQUEST);
    array_shift($req);
    $dyn = explode('}', DYNAMIC_ROUTE);
    foreach ($dyn as $key => $val) {
        $dyn[$key] = str_replace('/', '', explode('{', $val));
    }
    $vars = [];
    foreach ($dyn as $key => $val) {
        if (count($val) == 1) {
            //junk
            array_shift($req);
        } else {
            if (!empty($val[0])) {
                //junk
                array_shift($req);
            }
            //var
            $vars[$val[1]] = array_shift($req);
        }
    }
    return $vars;
}
