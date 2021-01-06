<?php
function stripslashes_array($array) { 
    return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array); 
} 
$_POST = stripslashes_array($_POST); 
?>