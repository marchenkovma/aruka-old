<?php

function debug($date, $die = false)
{
    echo '<pre>' . print_r($date, 1) . '</pre>';
    if ($die) {
        die;
    }
}

function h($str)
{
    return htmlspecialchars($str);
}