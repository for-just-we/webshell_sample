<?php
function warrow($aname)
{
  Header("Content-type: image/gif");
  $header = "4749463839610c000b00800100ffffffffffff21f90401000001002c000000000c000b000002188c";
  echo ($aname == "up")?pack("H130",$header."03a707bddcdc8a54d10b9193c844ff7c8fc785e5740605003b"):pack("H130",$header."81a68bb0df1e4bf0506743a4ba796c7d92287560792a05003b");
  exit;
}

warrow();
?>