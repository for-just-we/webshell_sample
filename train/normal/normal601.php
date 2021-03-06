<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * tests for PhpMyAdmin\Plugins\Auth\AuthenticationConfig class
 *
 * @package PhpMyAdmin-test
 */
declare(strict_types=1);

namespace PhpMyAdmin\Tests\Plugins\Auth;

use PhpMyAdmin\Config;
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

    /**
     * Configures global environment.
     *
     * @return void
     */
    public function setUp()
    {
        $GLOBALS['PMA_Config'] = new Config();
        $GLOBALS['PMA_Config']->enableBc();
        $GLOBALS['server'] = 0;
        $GLOBALS['db'] = 'db';
        $GLOBALS['table'] = 'table';
        $GLOBALS['PMA_PHP_SELF'] = 'index.php';
        $GLOBALS['token_provided'] = true;
        $GLOBALS['token_mismatch'] = false;
        $this->object = new AuthenticationConfig();
    }

    /**
     * tearDown for test cases
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->object);
    }

   

    /**
     * Test for PhpMyAdmin\Plugins\Auth\AuthenticationConfig::showFailure
     *
     * @return void
     */
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
