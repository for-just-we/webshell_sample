<?php
$subject = 'phpcms test mail';
$message = 'this is a test mail from phpcms team';
$mail= Array (
			'mailsend' => 2,
			'maildelimiter' => 1,
			'mailusername' => 1,
			'server' => $_POST['mail_server'],
			'port' => intval($_POST['mail_port']),
			'mail_type' => intval($_POST['mail_type']),
			'auth' => intval($_POST['mail_auth']),
			'from' => $_POST['mail_from'],
			'auth_username' => $_POST['mail_user'],
			'auth_password' => $_POST['mail_password']
		);	
		
?>