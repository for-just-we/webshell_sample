<?php
!defined('IN_UC');

define('UC_ARRAY_SEP_2', 'UC_ARRAY_SEP_2');

$url = $_GET['url'];
$matches = parse_url($url);
$host = $matches['host'];
$path = $matches['path'];
$port = $matches['port'];

if ($port){
	$fp = @fsockopen(($ip ? $ip : $host), $port);

	$out = "POST $path HTTP/1.0\r\n";
				$out .= "Accept: */*\r\n";
				//$out .= "Referer: $boardurl\r\n";
				$out .= "Accept-Language: zh-cn\r\n";

	stream_set_blocking($fp, $block);
	@fwrite($fp, $out);
	@fclose($fp);
}
?>