<?php
function puke($food, $color = '#FFB770')
{
    echo '<div style="background-color: ' . $color . '; padding: 8px; margin: 16px; outline: 1px solid rgba(0,0,0,.8);"><pre>';
    print_r($food);
    echo '</pre></div>';
}

function alive($text = null, $color = '#4FDF40')
{
    if (!is_string($text)) {
        $text = "IT'S ALIVE!";
    }
    echo '<div style="background-color: ' . $color . '; padding: 8px; margin: 16px; outline: 1px solid rgba(0,0,0,.8); font-weight: bold; font-family: Verdana, sans-serif;">';
    echo htmlspecialchars($text);
    echo '</div>';
}
