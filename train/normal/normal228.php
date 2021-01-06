<?php
@ob_start();
$res = @ob_get_contents();
@ob_end_clean();
?>