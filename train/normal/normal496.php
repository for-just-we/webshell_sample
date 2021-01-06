<?php
class Post3 extends BaseObject
{
    public $id = 33;
    /** @var BaseObject */
    public $subObject;

    public function init()
    {
        $this->subObject = new Post2();
    }
}
?>