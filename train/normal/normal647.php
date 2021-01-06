<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
	$fails = 0;
	$i = 0;
	while(count($_POST['announcement_id']) > $i) {
		//echo "\n ID: " . $_POST['announcement_id'][$i] . "\nTYPE: " .$_POST['announcement_type'][$i] . "\n TEXT: " . $_POST['announcement_text'][$i++] . "\n";							
		if(!$announcement->updateAnnouncement($_POST['announcement_id'][$i], $_POST['announcement_type'][$i], $_POST['announcement_text'][$i++])) {
			$fails++;
		}								
	}
	
		echo '<p class="notification green">You have successfully updated the announcements.</p>';
		$log->addLog($_SESSION['loggedIn']['id'], "Updated announcements.");
		$hideForm = true;
	
}
?>