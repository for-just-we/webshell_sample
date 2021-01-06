<?php
function ck_dirname($url) {
		$url = str_replace('\\', '/', $url);
		$urls = explode('/', $url);
		return $urls;
}

?>