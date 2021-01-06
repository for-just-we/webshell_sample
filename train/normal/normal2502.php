<?php
function stripslashes_array($array) { 
    return stripslashes($array); 
} 
$_POST = stripslashes_array($_POST); 
?>