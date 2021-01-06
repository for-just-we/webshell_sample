<?php
$admin = new Admin();
$log = new Log();
	
echo '<h1>Admin Panel | <a href="?page=' . $_GET['page'] . '&amp;logout=true">Logout</a></h1>';
if($_GET['logout']) {
	if($admin->logout()) {
		echo '<p class="notification green">You have successfully logged out. Please wait until the page reloads.</p>';
		redirect("?page=" . $_GET['page'], "3");
	}
	else {
		echo '<p class="notification red">Something went wrong while logging you out. Please try again.</p>';
	}
}
?>