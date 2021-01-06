<?php
######################################################################
# we decide if we want syslogging
closelog();
######################################################################
# define variables
######################################################################

# error_reporting(E_ALL);
error_reporting(0);

# get globals even if register_globals is off
import_globals();

$safe_mode = ini_get('safe_mode');
$register_globals = ini_get('register_globals');
$magic_quotes_gpc = ini_get('magic_quotes_gpc');
$txt['en']['on']="on";
$txt['en']['off']="off";
$txt['de']['on']="an";
$txt['de']['off']="aus";
$lang="en";

?>