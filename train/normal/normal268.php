<?php
echo '<br><br>#########################<br><br>';
echo '<form method="POST" action="?action=mailgo">';
echo 'Enter the expeditor Email: ';
echo '<input type="text" name="exp" size="30" value="you@ownz.com"><br>';
echo 'Enter the receptor Email: ';
echo '<input type="text" name="recpt" size="30" value="fucker@small-dick.com"><br>';
echo 'Enter the topic of your Email: ';
echo '<input type="text" name="topic" size="30" value="Have a nice day looser :D"><br><br>';
echo 'Enter the Email content:<br>';
echo '<textarea name="content" cols="50" rows="10"></textarea><br><br>';
echo '<input type="submit" value="Send Email"></form>';
?>