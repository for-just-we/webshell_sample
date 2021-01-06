<?php
if($_GET['action'] == "home" || empty($_GET['action'])) {
	echo ' class="current"';
}
echo '>Home</a></li>';
echo '<li><a href="?page=' . $_GET['page']  . '&amp;action=general"';

if($_GET['action'] == "general") {
	echo ' class="current"';
}
echo '>General</a></li>';
echo '<li><a href="?page=' . $_GET['page'] . '&amp;action=manage-announcements"';

if($_GET['action'] == "manage-announcements") {
	echo ' class="current"';
}
echo '>Manage Announcements</a></li>';
echo '<li><a href="?page=' . $_GET['page'] . '&amp;action=manage-keys"';

if($_GET['action'] == "manage-keys") {
	echo ' class="current"';
}
echo '>Manage Keys</a></li>';
echo '<li><a href="?page=' . $_GET['page'] . '&amp;action=manage-clients"';

if($_GET['action'] == "manage-clients") {
	echo ' class="current"';
}
echo '>Manage Clients</a></li>';
echo '<li><a href="?page=' . $_GET['page'] . '&amp;action=manage-admins"';

if($_GET['action'] == "manage-admins") {
	echo ' class="current"';
}
echo '>Manage Admins</a></li>';
echo '<li><a href="?page=' . $_GET['page'] . '&amp;action=manage-faq"';
if($_GET['action'] == "manage-faq") {
	echo ' class="current"';
}
?>