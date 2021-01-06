<?php
class Post2 extends BaseObject
{
    public $id = 123;
    public $content = 'test';
    private $secret = 's';
    public function getSecret()
    {
        return $this->secret;
    }
}
?>