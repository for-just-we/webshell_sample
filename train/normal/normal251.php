<?php
function good_link($link)
{
  $link=ereg_replace("/+","/",$link);
  $link=ereg_replace("/[^/(..)]+/\.\.","/",$link);
  $link=ereg_replace("/+","/",$link);
  $link=substr($link,2);
  return $link;
}

$dir = $_REQUEST['dir'];
$dir = good_link($dir);
?>

