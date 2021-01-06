<?php
$action = $_GET['action'];
			
if(empty($_GET['action'])) {
	$action = "home";
}
			
switch($action) {
	case "home":
		if($admin->getFieldDataByID($_SESSION['loggedIn']['id'], "last_login") == NULL || $admin->getFieldDataByID($_SESSION['loggedIn']['id'], "last_login") == "0000-00-00 00:00:00") {
			echo '<p class="notification green">Welcome to the admin panel <b>' . $_SESSION['loggedIn']['username'] . '</b>.</p>';
		}
		else {
			echo '<p class="notification green">Welcome back to the admin panel <b>' . $_SESSION['loggedIn']['username'] . '</b>.</p>';
		}
		break;
	case "general":
		$announcement = new Announcement();
		echo '
					<div style="overflow: auto;" id="admin">
                    <div style="float: left; width: 160px;">';
        echo '<ul id="subMenu">';
        echo '<li><a href="?page=' . $_GET['page'] . '&amp;action=' . $_GET['action'] . '&amp;do=website-properties"';
		if($_GET['do'] == 'website-properties' || empty($_GET['do'])) {
			echo ' class="current"';
		}
		echo '>Website properties</a></li>';
        echo '<li><a href="?page=' . $_GET['page'] . '&amp;action=' . $_GET['action'] . '&amp;do=proxy-properties"';
		if($_GET['do'] == 'proxy-properties') {
			echo ' class="current"';
		}
		echo '>Proxy properties</a></li>';
        echo '<li><a href="?page=' . $_GET['page'] . '&amp;action=' . $_GET['action'] . '&amp;do=custom-query"';
		if($_GET['do'] == 'custom-query') {
			echo ' class="current"';
		}
		echo '>Custom Query</a></li>';
        echo '</ul>';
        echo '</div>
                    <div style="float: right; width: 750px;">';
					
					
		if($_GET['do'] == 'website-properties' || empty($_GET['do'])) 
			$wProperty = new WebsiteProperty();
		break;
}
?>
