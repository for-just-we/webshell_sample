<?php
use yii\test\FixtureTrait;

class BaseDbTestCase
{
    use FixtureTrait;

    public function setUp()
    {
        $this->initFixtures();
    }

    public function tearDown()
    {
    }
}

?>