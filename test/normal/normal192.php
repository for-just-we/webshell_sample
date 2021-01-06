<?php
function Logout()
{
	print"<script>
	document.cookie='user=';
	document.cookie='pass=';
	var url = window.location.pathname;
	var filename = url.substring(url.lastIndexOf('/')+1);
	window.location=filename;
	</script>";
}

if($_GET['id']== 'logout')
{
	Logout();
}
die();
?>