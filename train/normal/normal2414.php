<?php
$GLOB['SYS']['GZIP']['CanUse']=$GLOB['SYS']['GZIP']['CanOutput']=false;
if (isset($_GET['dx_gzip']) OR isset($_POST['dx_gzip']))
{	
    $GLOB['SYS']['GZIP']['CanUse']=extension_loaded("zlib");
	if (extension_loaded("zlib"))
		if (!(strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')===FALSE))
			$GLOB['SYS']['GZIP']['CanOutput']=TRUE;
};
$GLOB['SYS']['GZIP']['IMG']=extension_loaded("zlib");

$GLOB['SYS']['OS']['id']=($GLOB['FILES']['CurDIR'][1]==':')?'Win':'Nix';
$GLOB['SYS']['OS']['Full']=getenv('OS');
?>