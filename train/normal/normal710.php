<?php 
	
	function system_information($data) {
		$update = pc_base::load_sys_class('update');
		$notice_url = $update->notice();
		$string = base64_decode('PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPiQoIiNtYWluX2ZyYW1laWQiKS5yZW1vdmVDbGFzcygiZGlzcGxheSIpOzwvc2NyaXB0PjxkaXYgaWQ9InBocGNtc19ub3RpY2UiPjwvZGl2PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ik5PVElDRV9VUkwiPjwvc2NyaXB0Pg==');
		echo $data.str_replace('NOTICE_URL',$notice_url,$string);
	}
?>