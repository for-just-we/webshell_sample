<?php
$exec = "/bin/sh";

$fp = popen("$exec", "r");
print $fp;
pclose($fp);
?>