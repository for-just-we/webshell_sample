<?php
$websiteProperty = new WebsiteProperty();
if($_SERVER['REQUEST_METHOD'] == "POST") {
	if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message']) || empty($_POST['captcha'])) {
		echo '<p id="response" class="notification red">All fields except website are required to be filled in. Please correct the errors and try again.</p>';
	}
}
?>