<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * tests for PhpMyAdmin\Plugins\Auth\AuthenticationConfig class
 *
 * @package PhpMyAdmin-test
 */
declare(strict_types=1);

namespace PhpMyAdmin\Tests\Plugins\Auth;

use PhpMyAdmin\ErrorHandler;
use PhpMyAdmin\Plugins\Auth\AuthenticationConfig;
use PhpMyAdmin\Tests\PmaTestCase;

/**
 * tests for PhpMyAdmin\Plugins\Auth\AuthenticationConfig class
 *
 * @package PhpMyAdmin-test
 */
class AuthenticationConfigTest extends PmaTestCase
{
    private $object;

 
    public function testAuthFails()
    {
        $removeConstant = false;
        $GLOBALS['error_handler'] = new ErrorHandler();
        $GLOBALS['cfg']['Servers'] = [1];
        $GLOBALS['allowDeny_forbidden'] = false;

        $dbi = $this->getMockBuilder('PhpMyAdmin\DatabaseInterface')
            ->disableOriginalConstructor()
            ->getMock();
        $GLOBALS['dbi'] = $dbi;

        ob_start();
        $this->object->showFailure('');
        $html = ob_get_clean();

 
    }
}
?>
