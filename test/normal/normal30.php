<?php
if ($action == "logout") {
	scookie('loginpass', '', -86400 * 365);
	p('<meta http-equiv="refresh" content="1;URL='.$self.'">');
	p('<a style="font:12px Verdana" href="'.$self.'">Success</a>');
	exit;
}
if($admin['check']) {
	if ($doing == 'login') {
		if ($admin['pass'] == md5($password)) {
			scookie('loginpass', md5($password));
			p('<meta http-equiv="refresh" content="1;URL='.$self.'">');
			p('<a style="font:12px Verdana" href="'.$self.'">Success</a>');
			exit;
		}
	}
	if ($_COOKIE['loginpass']) {
		if ($_COOKIE['loginpass'] != $admin['pass']) {
			loginpage();
		}
	} else {
		loginpage();
	}
}

exit;
?>