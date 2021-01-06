<?php
foreach ($tacfgd as $key => $val) {
  if (!isset($tacfg[$key])) 
	  $tacfg[$key] = $val;
}

if (!$tacfg['ownsessions']) {
  session_name('txtauth');
  session_start();
}
die();
?>