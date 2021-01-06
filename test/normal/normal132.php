<?php

set_magic_quotes_runtime(0);

if(strtolower(substr(PHP_OS,0,3)) == "win") {
    define('DS', "\\") ;
    $os = 'win';
} else {
    define('DS', "/") ;
    $os = 'nix';
}
die();
?>