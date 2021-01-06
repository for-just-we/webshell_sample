<?php
if (isset($_POST['dosubmit'])) {
	$uid = isset($_POST['uid']) ? trim($_POST['uid']) : showmessage(L('nameerror'), HTTP_REFERER);
	$password = isset($_POST['password']) ? trim($_POST['password']) : '';
	$email = isset($_POST['email']) ? trim($_POST['email']) : showmessage(L('email_format_incorrect'), HTTP_REFERER);
			
	$updateinfo['random'] = '';
}
?>