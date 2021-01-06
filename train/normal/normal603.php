<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * tests for PhpMyAdmin\Plugins\Auth\AuthenticationConfig class
 *
 * @package PhpMyAdmin-test
 */
declare(strict_types=1);

namespace PhpMyAdmin\Tests\Plugins\Auth;

use PhpMyAdmin\Tests\PmaTestCase;

/**
 * tests for PhpMyAdmin\Plugins\Auth\AuthenticationConfig class
 *
 * @package PhpMyAdmin-test
 */
class AuthenticationConfigTest extends PmaTestCase
{
    private $object;

    
    public function tearDown()
    {
        unset($this->object);
    }

}
?>
