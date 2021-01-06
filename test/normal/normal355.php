<?php
	header('content-type:text/html; charset= utf-8');
    echo "<h1>php get post</h1>";
    echo 'username：'.$_GET['userName'];
    echo '<br/>';
    echo 'mail：'.$_GET['userEmail'];
 ?>