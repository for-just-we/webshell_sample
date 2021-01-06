<?php 
$roles = array($_POST['role']);
foreach($roles as $role)
{
	echo $role['rolename'];
}	
?>