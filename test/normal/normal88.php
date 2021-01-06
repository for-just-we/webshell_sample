<?php
function getTime() {
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

echo getTime();
exit;
?>