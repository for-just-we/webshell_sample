<?php
class card {

	public function sys_auth($txt, $operation = 'ENCODE', $key = '') {
		$key	= $key ? $key : 'oqjtioxiWRWKLEQJLKj';
		$txt	= $operation == 'ENCODE' ? (string)$txt : base64_decode($txt);
		$len	= strlen($key);
		$code	= '';
		for($i=0; $i<strlen($txt); $i++){
			$k		= $i % $len;
			$code  .= $txt[$i] ^ $key[$k];
		}
		$code = $operation == 'DECODE' ? $code : base64_encode($code);
	return $code;
}
}
?>