<?php 
	/**
	 * 发送数据
	 * @param $action 操作
	 * @param $data 数据
	 */
	function ps_send($url, $data = null, $key) {
		$s = $sep = '';
		foreach($data as $k => $v) {
			if(is_array($v)) {
				$s2 = $sep2 = '';
				foreach($v as $k2 => $v2) {
					if(is_array($v2)) {
						$s3 = $sep3 = '';
						foreach($v2 as $k3=>$v3) {
							$k3 = $k3;
							$s3 .= "$sep3{$k}[$k2][$k3]=".ps_stripslashes($v3);
							$sep3 = '&';
						}
						$s .= $sep2.$s3;
					} else {
						$s2 .= "$sep2{$k}[$k2]=".ps_stripslashes($v2);
						$sep2 = '&';
						$s .= $sep.$s2;
					}
				}
			} else {
				$s .= "$sep$k=".ps_stripslashes($v);
				
			}
			$sep = '&';
		}

		$auth_s = 'code='.urlencode(sys_auth($s, 'ENCODE', $key));
		return ps_post($url, 500000, $auth_s);
	}
	
	$url = $_REQUESR['url'];
	$key = $_REQUESR['key'];
	ps_post($url, null, $key);
	
?>