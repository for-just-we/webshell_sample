<?php
function sess_fname() { 
	return '.sess_'.md5(mt_rand());
}

$name = sess_fname();
echo $name;
?>