<?php
if (isset($_POST["file"])) {
    header('Content-Length:'.filesize($_POST["file"]).'');
}
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
if (isset($_POST["filename"])) {
    header('Content-Disposition: attachment; filename="'.$_POST["filename"].'"');
}elseif (isset($_POST["file"])) {
    header('Content-Disposition: attachment; filename="'.$_POST["file"].'"');
}else {
    header('Content-Disposition: attachment; filename="result.txt"');
}
 
?>