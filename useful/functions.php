<?php

function clean($string)
{
    $string = trim($string);
    $string = strip_tags($string);
    return $string;
}


function checkDateValidity($date) {
    $dateArray = explode('-', $date);
    return checkdate($dateArray[1], $dateArray[2], $dateArray[0]);
}
?>