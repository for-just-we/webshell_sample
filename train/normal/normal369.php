<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiiunit\framework\test;

use yii\test\ActiveFixture;
use yii\test\FixtureTrait;
use yiiunit\data\ar\ActiveRecord;
use yiiunit\data\ar\Customer;
use yiiunit\framework\db\DatabaseTestCase;

class ProfileFixture extends ActiveFixture
{
    public $modelClass = 'yiiunit\data\ar\Profile';
}

class CustomerFixture extends ActiveFixture
{
    public $modelClass = 'yiiunit\data\ar\Customer';

    public $depends = [
        'yiiunit\framework\test\ProfileFixture',
    ];
}

class CustomDirectoryFixture extends ActiveFixture
{
    public $modelClass = 'yiiunit\data\ar\Customer';

    public $dataDirectory = '@app/framework/test/custom';
}

class AnimalFixture extends ActiveFixture
{
    public $modelClass = 'yiiunit\data\ar\Animal';
}

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

class CustomerDbTestCase extends BaseDbTestCase
{
    public function fixtures()
    {
        return [
            'customers' => CustomerFixture::className(),
        ];
    }
}

class CustomDirectoryDbTestCase extends BaseDbTestCase
{
    public function fixtures()
    {
        return [
            'customers' => CustomDirectoryFixture::className(),
        ];
    }
}

class DataPathDbTestCase extends BaseDbTestCase
{
    public function fixtures()
    {
        return [
            'customers' => [
                'class' => CustomDirectoryFixture::className(),
                'dataFile' => '@app/framework/test/data/customer.php'
            ]
        ];
    }
}

class TruncateTestCase extends BaseDbTestCase
{
    public function fixtures()
    {
        return [
            'animals' => [
                'class' => AnimalFixture::className(),
            ]
        ];
    }
}

?>
